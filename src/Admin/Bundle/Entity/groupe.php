<?php

namespace Admin\Bundle\Entity;

/**
 * groupe
 */
class groupe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomGroupe;

     /**
     * @var integer
     *
     * 
     */
    private $idNiveau;


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
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return groupe
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }
    function getIdNiveau() {
        return $this->idNiveau;
    }

    function setIdNiveau(niveau $idNiveau) {
        $this->idNiveau = $idNiveau;
    }

 public function __toString() {
      return $this->nomGroupe;
  }
    
}

