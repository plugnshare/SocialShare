<?php

namespace Ss\MembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Ss\MembreBundle\Form\Type\RechercheUtilisateurFormType;
use Ss\MembreBundle\Entity\Ami;

class MembreController extends Controller
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
  
	
	// Page de profil d'un membre
	/**
	 * @Secure(roles="ROLE_USER")
	 */
    public function profilAction($id)
    {
		// On récupère l'EntityManager
		$em = $this->getDoctrine()
				   ->getManager();
		 
		// On récupère le membre
		$utilisateur = $em->getRepository('SsMembreBundle:Utilisateur')
					  ->find($id);
		
		$listeDemandeAmis = $em->getRepository('SsMembreBundle:Ami')->findByAmiValide($id, $this->container->get('security.context')->getToken()->getUser()->getId());

		if (count($listeDemandeAmis) > 0) 
			$deja_ami = 1;
		else
		{
			$listeDemandeAmis = $em->getRepository('SsMembreBundle:Ami')->findByDemande($id, $this->container->get('security.context')->getToken()->getUser()->getId());
			if (count($listeDemandeAmis) > 0) 
				$deja_ami = 2;
			else
				$deja_ami = 0;
		}
		
		// On vérifie que le membre existe
		if ($utilisateur === null)
		{
			throw $this->createNotFoundException('Membre[id='.$id.'] inexistant.');
		}
	 
		// On récupère la liste des publications du membre (du plus récent au plus vieux)
		$liste_publications = $em->getRepository('SsFichierBundle:Publication')
									  ->findBy(
										array('utilisateur' => $utilisateur),
										array('datePublication' => 'DESC')
									  );
									  
		// On récupère la liste des demandes d'ami
		$demandes_ami = array();
		$demandes_ami = $em->getRepository('SsMembreBundle:Ami')->findByAmiDemandes($id);
		
		// Liste amis
		$listeAmis = $em->getRepository('SsMembreBundle:Ami')->findByAmi($id);
		
		// On affiche la vue
        return $this->render('SsMembreBundle:Membre:profil.html.twig', array(
			'publications'		=> $liste_publications,
			'user'		=> $utilisateur,
			'demandes_ami' => $demandes_ami,
			'deja_ami' => $deja_ami,
			'listeAmis' => $listeAmis
		));
	}
	
	// Page de recherche d'un membre
    public function rechercheAction()
    {
		// On crée le FormBuilder grâce à la méthode du contrôleur. Toujours sans entité
        $form = $this->createForm(new RechercheUtilisateurFormType());

        // On récupère la requête
		$request = $this->getRequest();
		
		$listeUtilisateurs = null;
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);

            // On vérifie que les valeurs entrées sont correctes
            if($form->isValid())
            {
				$data = $form->getData();
				
				$repository = $this->getDoctrine()
				   ->getManager()
				   ->getRepository('SsMembreBundle:Utilisateur');
				   
				$listeUtilisateurs = $repository->findByUsernameLike($data['pseudo']);
            }
        }

        // Affichage de la vue
        return $this->render('SsMembreBundle:Membre:recherche.html.twig', array(
			'form' => $form->createView(),
			'liste_utilisateurs' => $listeUtilisateurs
		));
    }
    
	// Page d'affichage de la liste des amis d'un membre
    public function listeAmisAction($id)
    {
		$repository = $this->getDoctrine()
		   ->getManager()
		   ->getRepository('SsMembreBundle:Ami');
		   
		$listeAmis = $repository->findByAmi($id);
		
        // Affichage de la vue
        return $this->render('SsMembreBundle:Membre:liste_amis.html.twig', array(
			'liste_amis' => $listeAmis
		));
    }
    
	// Page de demande en ami d'un membre
	/**
	 * @Secure(roles="ROLE_USER")
	 */
    public function demanderAmiAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('SsMembreBundle:Ami');
		$utilisateur = $em->getRepository('SsMembreBundle:Utilisateur')->find($id);
		
		$listeAmis = $repository->findByAmi($id);
		
		// On cherche s'ils sont déjà amis
		$idAmitie = 0;
		foreach ($listeAmis as $ami) 
		{
			if (($ami->getUtilisateur1()->getId() == $id) || ($ami->getUtilisateur2()->getId() == $id))
			{
				$idAmitie = $ami->getId();
			}
		}
		
		//~ // S'ils ne sont pas amis on crée la demande
		if ($idAmitie > 0) 
		{
			$amitie = $em->getRepository('SsMembreBundle:Ami')->find($idAmitie);
			$amitie->setEtat('en cours');
			
			if ($amitie->getEtat() == 'en cours')
			{
				$this->get('session')->getFlashBag()->add(
					'notice',
					'Vous avez déjà demandé cet utilisateur en ami.'
				);
			}
			else if ($amitie->getEtat() == 'ami')
			{
				$this->get('session')->getFlashBag()->add(
					'notice',
					'Vous êtes déjà ami avec cet utilisateur.'
				);
			}
		}
		else
		{
			$amitie = new Ami;
			$amitie->setUtilisateur1($utilisateur);
			$amitie->setUtilisateur2($this->container->get('security.context')->getToken()->getUser());
			$amitie->setEtat('en cours');
			
			$this->get('session')->getFlashBag()->add(
				'notice',
				'Votre demande a bien été envoyée !'
			);
		}
		$em->persist($amitie);
		$em->flush();
		
		// On renvoie vers le profil
        return $this->redirect($this->generateUrl('ss_membre_profil', array('id' => $id)));
    }
    
    // Page d'acceptation en ami d'un membre
	/**
	 * @Secure(roles="ROLE_USER")
	 */
    public function accepterAmiAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('SsMembreBundle:Ami');
		$utilisateur = $em->getRepository('SsMembreBundle:Utilisateur')->find($id);
		
		$listeAmis = $repository->findByDemande($id, $this->container->get('security.context')->getToken()->getUser()->getId());

		if (count($listeAmis) > 0) 
		{
			foreach ($listeAmis as $ami) 
			{
				$ami->setEtat('ami');
				$em->persist($ami);
			}
			$em->flush();
			
			$this->get('session')->getFlashBag()->add(
				'notice',
				'Votre demande d\'ami a bien été acceptée !'
			);
		}
		else
		{
			$this->get('session')->getFlashBag()->add(
				'notice',
				'Vous n\'avez pas de demande d\'ami pour cet utilisateur.'
			);
		}
		
		// On renvoie vers le profil
        return $this->redirect($this->generateUrl('ss_membre_profil', array('id' => $this->container->get('security.context')->getToken()->getUser()->getId())));
    }
    
	// Page de création d'un groupe
    public function creerGroupeAction()
    {
        //return $this->render('SsMembreBundle:Default:index.html.twig', array('name' => $name));
    }
    
	// Page permettant d'ajouter un ami dans un groupe
    public function ajoutAmiGroupeAction()
    {
        //return $this->render('SsMembreBundle:Default:index.html.twig', array('name' => $name));
    }
    
	// Page permettant de supprimer un ami dans un groupe
    public function supprimerAmiGroupeAction($id)
    {
        //return $this->render('SsMembreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
	// Page de recherche d'un membre
	/**
	 * @Secure(roles="ROLE_ADMIN")
	 */
    public function bannirAction($id)
    {
        //return $this->render('SsMembreBundle:Default:index.html.twig', array('name' => $name));
    }
   
}
