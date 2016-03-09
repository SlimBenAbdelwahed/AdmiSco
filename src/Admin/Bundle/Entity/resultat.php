<?php

namespace Admin\Bundle\Entity;

/**
 * resultat
 */
class resultat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $qrcodeEtudiant;

    /**
     * @var float
     */
    private $moyen;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $mention;

    /**
     * @var string
     */
    private $remarque;


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
     * Set qrcodeEtudiant
     *
     * @param string $qrcodeEtudiant
     *
     * @return resultat
     */
    public function setQrcodeEtudiant(Etudiant $qrcodeEtudiant)
    {
        $this->qrcodeEtudiant = $qrcodeEtudiant;

        return $this;
    }

    /**
     * Get qrcodeEtudiant
     *
     * @return string
     */
    public function getQrcodeEtudiant()
    {
        return $this->qrcodeEtudiant;
    }

    /**
     * Set moyen
     *
     * @param float $moyen
     *
     * @return resultat
     */
    public function setMoyen($moyen)
    {
        $this->moyen = $moyen;

        return $this;
    }

    /**
     * Get moyen
     *
     * @return float
     */
    public function getMoyen()
    {
        return $this->moyen;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return resultat
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set mention
     *
     * @param string $mention
     *
     * @return resultat
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     *
     * @return resultat
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }
}

