<?php

namespace Ss\MembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class MembreController extends Controller
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
  
  
	// Page de recherche d'un membre
    public function rechercheAction($id)
    {
        //return $this->render('SsMembreBundle:Default:index.html.twig', array('name' => $name));
    }
    
	// Page de demande en ami d'un membre
    public function demanderAmiAction($id)
    {
        //return $this->render('SsMembreBundle:Default:index.html.twig', array('name' => $name));
    }
    
	// Page d'affichage de la liste des amis d'un membre
    public function listeAmisAction($id)
    {
        //return $this->render('SsMembreBundle:Default:index.html.twig', array('name' => $name));
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
