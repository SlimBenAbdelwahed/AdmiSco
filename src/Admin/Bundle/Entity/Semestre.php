<?php

namespace Admin\Bundle\Entity;

/**
 * Semestre
 */
class Semestre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numSemestre;


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
     * Set numSemestre
     *
     * @param string $numSemestre
     *
     * @return Semestre
     */
    public function setNumSemestre($numSemestre)
    {
        $this->numSemestre = $numSemestre;

        return $this;
    }

    /**
     * Get numSemestre
     *
     * @return string
     */
    public function getNumSemestre()
    {
        return $this->numSemestre;
    }
    
    public function __toString() {
        return $this->numSemestre;
    }

}

