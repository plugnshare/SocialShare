<?php

namespace Ss\FichierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class FichierController extends Controller
{
    // Page de recherche d'un membre
    public function dossierAction($id)
    {
        //return $this->render('SsFichierBundle:Default:index.html.twig', array('name' => $name));
    }
    
	// Page de demande en ami d'un membre
    public function uploaderAmiAction($id, $emplacement)
    {
        //return $this->render('SsFichierBundle:Default:index.html.twig', array('name' => $name));
    }
    
	// Page d'affichage de la liste des amis d'un membre
    public function telechargerAction($id)
    {
        //return $this->render('SsFichierBundle:Default:index.html.twig', array('name' => $name));
    }
}
