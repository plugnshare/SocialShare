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
     * @var integer
     *
     * @ORM\Column(name="id_user_1", type="integer")
     */
    private $idUser1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_2", type="integer")
     */
    private $idUser2;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=1)
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
     * Set idUser1
     *
     * @param integer $idUser1
     * @return Ami
     */
    public function setIdUser1($idUser1)
    {
        $this->idUser1 = $idUser1;

        return $this;
    }

    /**
     * Get idUser1
     *
     * @return integer 
     */
    public function getIdUser1()
    {
        return $this->idUser1;
    }

    /**
     * Set idUser2
     *
     * @param integer $idUser2
     * @return Ami
     */
    public function setIdUser2($idUser2)
    {
        $this->idUser2 = $idUser2;

        return $this;
    }

    /**
     * Get idUser2
     *
     * @return integer 
     */
    public function getIdUser2()
    {
        return $this->idUser2;
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
}
