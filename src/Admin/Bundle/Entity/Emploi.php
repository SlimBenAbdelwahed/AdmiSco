<?php

namespace Admin\Bundle\Entity;

/**
 * Emploi
 */
class Emploi
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $matiereId;

    /**
     * @var integer
     */
    private $jourId;

    /**
     * @var integer
     */
    private $semestreId;

    /**
     * @var integer
     */
    private $salleId;

    /**
     * @var integer
     */
    private $groupeId;
    
    /**
     * @var time
     */
    private $heureDebut;
    
    /**
     * @var time
     */
    private $heureFin;
    /**
     * Get heureDebut
     *
     * @return time
     */
    
    function getHeureDebut() {
        return $this->heureDebut;
    }
    /**
     * Get heureFin
     *
     * @return time
     */
    function getHeureFin() {
        return $this->heureFin;
    }
    
    /**
     * Set heureDebut
     *
     * @param time $heureDebut
     *
     * @return Emploi
     */
    function setHeureDebut($heureDebut) {
        $this->heureDebut = $heureDebut;
    }
     /**
     * Set heureFin
     *
     * @param time $heureFin
     *
     * @return Emploi
     */
    function setHeureFin($heureFin) {
        $this->heureFin = $heureFin;
    }

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
     * Set matiereId
     *
     * @param integer $matiereId
     *
     * @return Emploi
     */
    public function setMatiereId($matiereId)
    {
        $this->matiereId = $matiereId;

        return $this;
    }

    /**
     * Get matiereId
     *
     * @return integer
     */
    public function getMatiereId()
    {
        return $this->matiereId;
    }

    /**
     * Set jourId
     *
     * @param integer $jourId
     *
     * @return Emploi
     */
    public function setJourId($jourId)
    {
        $this->jourId = $jourId;

        return $this;
    }

    /**
     * Get jourId
     *
     * @return integer
     */
    public function getJourId()
    {
        return $this->jourId;
    }

    /**
     * Set semestreId
     *
     * @param integer $semestreId
     *
     * @return Emploi
     */
    public function setSemestreId($semestreId)
    {
        $this->semestreId = $semestreId;

        return $this;
    }

    /**
     * Get semestreId
     *
     * @return integer
     */
    public function getSemestreId()
    {
        return $this->semestreId;
    }

    /**
     * Set salleId
     *
     * @param integer $salleId
     *
     * @return Emploi
     */
    public function setSalleId($salleId)
    {
        $this->salleId = $salleId;

        return $this;
    }

    /**
     * Get salleId
     *
     * @return integer
     */
    public function getSalleId()
    {
        return $this->salleId;
    }

    /**
     * Set groupeId
     *
     * @param integer $groupeId
     *
     * @return Emploi
     */
    public function setGroupeId($groupeId)
    {
        $this->groupeId = $groupeId;

        return $this;
    }

    /**
     * Get groupeId
     *
     * @return integer
     */
    public function getGroupeId()
    {
        return $this->groupeId;
    }
}

