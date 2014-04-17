<?php

namespace Ss\FichierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ss\FichierBundle\Entity\DroitRepository")
 */
class Droit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ss\FichierBundle\Entity\Fichier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fichier;

    /**
     * @ORM\ManyToOne(targetEntity="Ss\MembreBundle\Entity\Utilisateur")
     */
    private $utilisateurCible;

    /**
     * @ORM\ManyToOne(targetEntity="Ss\MembreBundle\Entity\Groupe")
     */
    private $groupeCible;

    /**
     * @var integer
     *
     * @ORM\Column(name="droit", type="integer")
     */
    private $droit;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set droit
     *
     * @param integer $droit
     * @return Droit
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;

        return $this;
    }

    /**
     * Get droit
     *
     * @return integer 
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * Set fichier
     *
     * @param \Ss\FichierBundle\Entity\Fichier $fichier
     * @return Droit
     */
    public function setFichier(\Ss\FichierBundle\Entity\Fichier $fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \Ss\FichierBundle\Entity\Fichier 
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set utilisateurCible
     *
     * @param \Ss\MembreBundle\Entity\Utilisateur $utilisateurCible
     * @return Droit
     */
    public function setUtilisateurCible(\Ss\MembreBundle\Entity\Utilisateur $utilisateurCible = null)
    {
        $this->utilisateurCible = $utilisateurCible;

        return $this;
    }

    /**
     * Get utilisateurCible
     *
     * @return \Ss\MembreBundle\Entity\Utilisateur 
     */
    public function getUtilisateurCible()
    {
        return $this->utilisateurCible;
    }

    /**
     * Set groupeCible
     *
     * @param \Ss\MembreBundle\Entity\Groupe $groupeCible
     * @return Droit
     */
    public function setGroupeCible(\Ss\MembreBundle\Entity\Groupe $groupeCible = null)
    {
        $this->groupeCible = $groupeCible;

        return $this;
    }

    /**
     * Get groupeCible
     *
     * @return \Ss\MembreBundle\Entity\Groupe 
     */
    public function getGroupeCible()
    {
        return $this->groupeCible;
    }
}
