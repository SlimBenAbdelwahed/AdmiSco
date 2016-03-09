<?php

namespace Admin\Bundle\Entity;

/**
 * jour
 */
class jour
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $designation;


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
     * Set designation
     *
     * @param string $designation
     *
     * @return jour
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }
    public function __toString() {
     return $this->designation;
   
    }
}

