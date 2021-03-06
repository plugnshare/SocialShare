<?php

namespace Ss\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ami
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ss\MembreBundle\Entity\AmiRepository")
 */
class Ami
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
     * @ORM\ManyToOne(targetEntity="Ss\MembreBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur1;

    /**
     * @ORM\ManyToOne(targetEntity="Ss\MembreBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur2;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


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
     * Set etat
     *
     * @param string $etat
     * @return Ami
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set utilisateur1
     *
     * @param \Ss\MembreBundle\Entity\Utilisateur $utilisateur1
     * @return Ami
     */
    public function setUtilisateur1(\Ss\MembreBundle\Entity\Utilisateur $utilisateur1)
    {
        $this->utilisateur1 = $utilisateur1;

        return $this;
    }

    /**
     * Get utilisateur1
     *
     * @return \Ss\MembreBundle\Entity\Utilisateur 
     */
    public function getUtilisateur1()
    {
        return $this->utilisateur1;
    }

    /**
     * Set utilisateur2
     *
     * @param \Ss\MembreBundle\Entity\Utilisateur $utilisateur2
     * @return Ami
     */
    public function setUtilisateur2(\Ss\MembreBundle\Entity\Utilisateur $utilisateur2)
    {
        $this->utilisateur2 = $utilisateur2;

        return $this;
    }

    /**
     * Get utilisateur2
     *
     * @return \Ss\MembreBundle\Entity\Utilisateur 
     */
    public function getUtilisateur2()
    {
        return $this->utilisateur2;
    }
}
