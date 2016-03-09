<?php

namespace Admin\Bundle\Entity;

/**
 * Contact
 */
class Contact
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $emailExpediteur;

    /**
     * @var string
     */
    private $sujet;
    /**
     * @var integer
     */
    private $actif;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $message;


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
     * Set emailExpediteur
     *
     * @param string $emailExpediteur
     *
     * @return Contact
     */
    public function setEmailExpediteur($emailExpediteur)
    {
        $this->emailExpediteur = $emailExpediteur;

        return $this;
    }

    /**
     * Get emailExpediteur
     *
     * @return string
     */
    public function getEmailExpediteur()
    {
        return $this->emailExpediteur;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Contact
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Contact
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
     * Set message
     *
     * @param string $message
     *
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}

