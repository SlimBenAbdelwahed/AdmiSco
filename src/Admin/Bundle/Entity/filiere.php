<?php

namespace Admin\Bundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table()
 * @ORM\Entity
 */
class filiere
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomFiliere;
/**
 * @OneToMany(targetEntity="diplome", mappedBy="id", cascade={"persist", "remove"})
 *  
 */
    private $idDiplome;


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
     * Set nomFiliere
     *
     * @param string $nomFiliere
     *
     * @return filiere
     */
    public function setNomFiliere($nomFiliere)
    {
        $this->nomFiliere = $nomFiliere;

        return $this;
    }

    /**
     * Get nomFiliere
     *
     * @return string
     */
    public function getNomFiliere()
    {
        return $this->nomFiliere;
    }
   

   

    /**
     * Get idDiplome
     *
     * @return integer
     */
    public function getIdDiplome()
    {
        return $this->idDiplome;
    }
    /**
     * Set idDiplome
     *
     * @param integer $idDiplome
     *
     * @return filiere
     */ 
    public function setIdDiplome(diplome $idDiplome)
  {
    $this->idDiplome = $idDiplome;

    return $this;
  }
 
  public function __toString() {
      return $this->nomFiliere;
  }

 
}

