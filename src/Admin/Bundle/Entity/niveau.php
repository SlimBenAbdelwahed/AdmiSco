<?php

namespace Admin\Bundle\Entity;
use Doctrine\ORM\Mapping as ORM;


class niveau
{
    /**
     * @var integer
     */
    private $id;
    
    /**
     * @var string
     */function getNiveau() {
        return $this->niveau;
    }

    function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

        private $niveau;

    /**
     * @ORM\ManyToOne(targetEntity="filiere")
     * @ORM\JoinColumn(name="filiere_id", referencedColumnName="id")
     **/
    private $idFiliere;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }

   

     /**
     * Set idFiliere
     *
     * @param integer $idFiliere
     *
     * @return niveau
     */
    public function setIdFiliere(filiere $idFiliere)
    {
        $this->idFiliere = $idFiliere;

        return $this;
    }

    /**
     * Get idFiliere
     *
     * @return integer
     */
    public function getIdFiliere()
    {
        return $this->idFiliere;
    }
    
    public function __toString() {
      return $this->niveau;
  }

}

