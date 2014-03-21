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
     * @var integer
     *
     * @ORM\Column(name="id_fichier", type="integer")
     */
    private $idFichier;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usergroupe", type="integer")
     */
    private $idUsergroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1)
     */
    private $type;

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
     * Set idFichier
     *
     * @param integer $idFichier
     * @return Droit
     */
    public function setIdFichier($idFichier)
    {
        $this->idFichier = $idFichier;

        return $this;
    }

    /**
     * Get idFichier
     *
     * @return integer 
     */
    public function getIdFichier()
    {
        return $this->idFichier;
    }

    /**
     * Set idUsergroupe
     *
     * @param integer $idUsergroupe
     * @return Droit
     */
    public function setIdUsergroupe($idUsergroupe)
    {
        $this->idUsergroupe = $idUsergroupe;

        return $this;
    }

    /**
     * Get idUsergroupe
     *
     * @return integer 
     */
    public function getIdUsergroupe()
    {
        return $this->idUsergroupe;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Droit
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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
}
