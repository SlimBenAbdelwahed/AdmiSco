<?php

namespace Admin\Bundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table()
 * @ORM\Entity
 */
class Matiere
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomMatiere;

    /**
     * @var string
     */
    private $typeMatiere;

    /**
     * @var float
     */
    private $coefficient;

    /**
     * @var \Time
     */
    private $duree;
    
    /**
     * @var integer
     */
    private $idEnseignant;
    
    
    /**
     * Get idEnseignant
     *
     * @return integer
     */
    function getIdEnseignant() {
        return $this->idEnseignant;
    }
       /**
     * Set idEnseignant
     *
     * @param integer $idEnseignant
     *
     * @return Matiere
     */

    function setIdEnseignant(Enseignant $idEnseignant) {
        $this->idEnseignant = $idEnseignant;
    }
        public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomMatiere
     *
     * @param string $nomMatiere
     *
     * @return Matiere
     */
    public function setNomMatiere($nomMatiere)
    {
        $this->nomMatiere = $nomMatiere;

        return $this;
    }

    /**
     * Get nomMatiere
     *
     * @return string
     */
    public function getNomMatiere()
    {
        return $this->nomMatiere;
    }

    /**
     * Set typeMatiere
     *
     * @param string $typeMatiere
     *
     * @return Matiere
     */
    public function setTypeMatiere($typeMatiere)
    {
        $this->typeMatiere = $typeMatiere;

        return $this;
    }

    /**
     * Get typeMatiere
     *
     * @return string
     */
    public function getTypeMatiere()
    {
        return $this->typeMatiere;
    }

    /**
     * Set coefficient
     *
     * @param float $coefficient
     *
     * @return Matiere
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return float
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Set duree
     *
     * @param \Time $duree
     *
     * @return Matiere
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }
    public function __toString() {
        return $this->getNomMatiere();
        
    }
     public function __toString1(){
        return $this->getTypeMatiere();
        
    }

}

