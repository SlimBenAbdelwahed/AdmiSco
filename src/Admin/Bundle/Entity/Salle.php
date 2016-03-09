<?php

namespace Admin\Bundle\Entity;

/**
 * Salle
 */
class Salle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numSalle;


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
     * Set numSalle
     *
     * @param string $numSalle
     *
     * @return Salle
     */
    public function setNumSalle($numSalle)
    {
        $this->numSalle = $numSalle;

        return $this;
    }

    /**
     * Get numSalle
     *
     * @return string
     */
    public function getNumSalle()
    {
        return $this->numSalle;
    }
    
    public function __toString() {
      return $this->numSalle;  
    }

}

