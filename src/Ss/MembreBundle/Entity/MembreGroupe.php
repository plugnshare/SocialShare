<?php

namespace Ss\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembreGroupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ss\MembreBundle\Entity\MembreGroupeRepository")
 */
class MembreGroupe
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
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer")
     */
    private $idGroupe;


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
     * Set idUser
     *
     * @param integer $idUser
     * @return MembreGroupe
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idGroupe
     *
     * @param integer $idGroupe
     * @return MembreGroupe
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return integer 
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }
}
