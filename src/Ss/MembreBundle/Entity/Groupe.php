<?php

namespace Ss\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ss\MembreBundle\Entity\GroupeRepository")
 */
class Groupe
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
    private $proprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Ss\MembreBundle\Entity\Utilisateur")
     */
    private $membres;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set nom
     *
     * @param string $nom
     * @return Groupe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Groupe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set proprietaire
     *
     * @param \Ss\MembreBundle\Entity\Utilisateur $proprietaire
     * @return Groupe
     */
    public function setProprietaire(\Ss\MembreBundle\Entity\Utilisateur $proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \Ss\MembreBundle\Entity\Utilisateur 
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Add membres
     *
     * @param \Ss\MembreBundle\Entity\Utilisateur $membres
     * @return Groupe
     */
    public function addMembre(\Ss\MembreBundle\Entity\Utilisateur $membres)
    {
        $this->membres[] = $membres;

        return $this;
    }

    /**
     * Remove membres
     *
     * @param \Ss\MembreBundle\Entity\Utilisateur $membres
     */
    public function removeMembre(\Ss\MembreBundle\Entity\Utilisateur $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }
}
