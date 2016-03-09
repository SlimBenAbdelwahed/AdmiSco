<?php

namespace Admin\Bundle\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class diplome
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomDiplome;


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
     * Set nomDiplome
     *
     * @param string $nomDiplome
     *
     * @return diplome
     */
    public function setNomDiplome($nomDiplome)
    {
        $this->nomDiplome = $nomDiplome;

        return $this;
    }

    /**
     * Get nomDiplome
     *
     * @return string
     */
    public function getNomDiplome()
    {
        return $this->nomDiplome;
    }
    public function __toString() {
        return $this->nomDiplome;
    }

}

