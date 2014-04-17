<?php

namespace Ss\FichierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Ss\MembreBundle\Entity\Ami;
use Ss\FichierBundle\Entity\Fichier;

use Ss\MembreBundle\Form\Type\RechercheUtilisateurFormType;
use Ss\FichierBundle\Form\Type\FichierFormType;

class FichierController extends Controller
{
	// Page d'accueil du site
	public function indexAction()
	{
		return $this->render('SsFichierBundle:Fichier:index.html.twig');
	}
	
	// Menu du site
	public function menuAction()
	{
		return $this->render('SsFichierBundle:Fichier:menu.html.twig');
	}
	
    // Page de d'affichage d'un dossier
	/**
	 * @Secure(roles="ROLE_USER")
	 */
    public function dossierAction($id, $emplacement)
    {
		// On récupère l'EntityManager
		$em = $this->getDoctrine()
				   ->getManager();
				   
		// On récupère le membre
		$utilisateur = $em->getRepository('SsMembreBundle:Utilisateur')->find($id);
					  
		// Vérification de l'amitié
		$listeAmis = $em->getRepository('SsMembreBundle:Ami')->findByAmi($this->container->get('security.context')->getToken()->getUser()->getId());
		
		// On cherche s'ils sont déjà amis
		$amitie = false;
		foreach ($listeAmis as $ami) 
		{
			if (($ami->getUtilisateur1()->getId() == $id) || ($ami->getUtilisateur2()->getId() == $id))
			{
				$amitie = true;
			}
		}
		
		if ($amitie || ($id == $this->container->get('security.context')->getToken()->getUser()->getId()))
		{
			// Création dossier
			$url = __DIR__.'/../../../../web/uploads/fichier/' . str_replace('\\', '/', $emplacement);
			
			
			// Récupérer le contenu du dossier
			$url = __DIR__.'/../../../../web/uploads/fichier/' . str_replace('\\', '/', $emplacement);
			$tmp = explode('\\', $emplacement);
			$contenuBrut = $tmp[count($tmp)-1] . '::';
			$contenuBrut .= $this->ScanDirectory($url);

			// Afficher le contenu
			$tmp1 = explode('::', $contenuBrut);
			$dossier = $tmp1[0];
			$tmp2 = explode(':', $tmp1[1]);
			$dossiers = array();
			$fichiers = array();
			$i=0;$j=0;
			foreach ($tmp2 as $fichierBrut) 
			{
				$tmp3 = explode('?', $fichierBrut);
				if(count($tmp3)>1)
				{
					if ($tmp3[1] == 'd')
					{
						$dossiers[$i] = $tmp3[0];
						$i++;
					}
					else
					{
						$fichiers[$j] = $tmp3[0];
						$j++;
					}
				}
			}
			
			// Emplacement parent
			$tmp = explode('\\', $emplacement);
			$i=0;$emplacement_parent='';
			if (count($tmp)>0)
			{
				foreach ($tmp as $valeur) 
				{
					if($i < count($tmp)-1)
					{
						if($i > 0)
							$emplacement_parent .= '\\';
						$emplacement_parent .= $valeur;
					}
					$i++;
				}
			}
			else 
				$emplacement_parent = '';
				
			// Formulaire upload
			$fichier = new Fichier;
			$form = $this->createForm(new FichierFormType(), $fichier);

			// On récupère la requête
			$request = $this->getRequest();
			
			if ($request->getMethod() == 'POST')
			{
				$form->bind($request);

				// On vérifie que les valeurs entrées sont correctes
				if($form->isValid())
				{
					$fichier->setEmplacement($emplacement);	
					$fichier->setUtilisateur($utilisateur);
					$fichier->upload();
					
					  // Puis, le reste de la méthode, qu'on avait déjà fait
					  $em = $this->getDoctrine()->getManager();
					  $em->persist($fichier);
					  $em->flush();
					  
					  // Rafraichissement
						return $this->redirect($this->generateUrl('ss_fichier_dossier', array('id' => $id, 'emplacement' => $emplacement)));
				}
			}
			
			$fichierDl = str_replace('\\', '/', $emplacement);
				
			return $this->render('SsFichierBundle:Fichier:lister.html.twig', array(
				'dossiers'		=> $dossiers,
				'fichiers'	=> $fichiers,
				'emplacement'		=> $emplacement,
				'emplacement_parent'		=> $emplacement_parent,
				'utilisateur'		=> $utilisateur,
				'dos'		=> '\\' . $emplacement,
				'form' => $form->createView(),
				'vide' => $i+$j,
			));
		}
		else
		{
			$this->get('session')->getFlashBag()->add(
				'notice',
				'Vous n\'êtes pas ami avec cet utilisateur.'
			);
				
			// On renvoie vers le profil
			return $this->redirect($this->generateUrl('ss_membre_profil', array('id' => $id)));
		}
    }
    
	// Page de demande en ami d'un membre
    public function uploaderAmiAction($id, $emplacement)
    {
        //return $this->render('SsFichierBundle:Default:index.html.twig', array('name' => $name));
    }
    
	// Page d'affichage de la liste des amis d'un membre
	/**
	 * @Secure(roles="ROLE_USER")
	 */	
    public function telechargerAction($ext, $fichier)
    {
		$fichier = __DIR__.'/../../../../web/uploads/fichier/' . str_replace('\\', '/', $fichier) . '.' . $ext;
        
        //~ $tmp = explode('.', $fichier);
        //~ $fichier = $tmp[0];
        
        $response = new Response();
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', "application/$ext"); 
        $response->setContent(file_get_contents($fichier));
        $response->headers->set('Content-Disposition', sprintf('attachment;filename="%s"', $fichier, $ext)); 
        $response->setCharset('UTF-8');
 
        // prints the HTTP headers followed by the content
        $response->send();
        return $response;
    }
    
    
    private function ScanDirectory($Directory){
		$url = '';
		if(is_dir($Directory)){
			//~ $contenuBrut .= 'Nom_dossier::fichier1?d:fichier2?f:fichier3?f:fichier4?f:fichier5?d:fichier6?f:fichier7?f:fichier8?f:fichier9?f:';
		  $MyDirectory = opendir($Directory) or die('Erreur');
			while($Entry = @readdir($MyDirectory)) {
				if ($Entry != '.' && $Entry != '..' && $Entry) {
					if(is_dir($Directory.'/'.$Entry)) {
						$url .= $Entry . '?d:';
					}
					else {
						$url .= $Entry . '?f:';
							}
						}
			}
		  closedir($MyDirectory);
	  }
	  else
		$url = ':';
		
		return $url;
	}
}
