<?php

namespace Ss\FichierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ss\FichierBundle\Entity\FichierRepository")
 */
class Fichier
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
    private $utilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="text")
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

	// Fichier
	public $file;
	private $tmpFile;
	

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
     * @return Fichier
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
     * Set emplacement
     *
     * @param string $emplacement
     * @return Fichier
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string 
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Fichier
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
     * Set utilisateur
     *
     * @param \Ss\MembreBundle\Entity\Utilisateur $utilisateur
     * @return Fichier
     */
    public function setUtilisateur(\Ss\MembreBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Ss\MembreBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
    
    public function upload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
      return;
    }
    // On garde le nom original du fichier de l'internaute
    $tmp = explode('.',$this->file->getClientOriginalName());
    $name = $this->getNom() . '.' . $tmp[count($tmp)-1];
    // On déplace le fichier envoyé dans le répertoire de notre choix
    $this->file->move($this->getUploadRootDir(), $name);
    // On sauvegarde le nom de fichier dans notre attribut $url
    $this->url = $name;
    // On crée également le futur attribut alt de notre balise <img>
    $this->alt = $name;
    $this->tmpFile = $this->getUploadRootDir().$this->id.$this->url;
  }
  public function remove()
  {
	  // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
    if (file_exists($this->tmpFile)) {
      // On supprime le fichier
      unlink($this->tmpFile);
    }
  }
  public function getUploadDir()
  {
    // On retourne le chemin relatif vers l'image pour un navigateur
    //~ return 'uploads/fichier/' . $this.getUtilisateur->getId();
    return 'uploads/fichier/' . str_replace('\\', '/', $this->getEmplacement());
  }
  protected function getUploadRootDir()
  {
    // On retourne le chemin relatif vers l'image pour notre code PHP
    return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }
}
