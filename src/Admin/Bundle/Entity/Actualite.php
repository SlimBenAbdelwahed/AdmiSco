<?php

namespace Admin\Bundle\Entity;

/**
 * Actualite
 */
class Actualite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sujet;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $dateActualite;


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
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Actualite
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Actualite
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
     * Set dateActualite
     *
     * @param \DateTime $dateActualite
     *
     * @return Actualite
     */
    public function setDateActualite($dateActualite)
    {
        $this->dateActualite = $dateActualite;

        return $this;
    }

    /**
     * Get dateActualite
     *
     * @return \DateTime
     */
    public function getDateActualite()
    {
        return $this->dateActualite;
    }
}

