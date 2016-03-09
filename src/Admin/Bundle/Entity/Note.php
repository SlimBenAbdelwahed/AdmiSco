<?php

namespace Admin\Bundle\Entity;

/**
 * Note
 */
class Note
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $noteDS1;

    /**
     * @var float
     */
    private $noteDS2;

    /**
     * @var float
     */
    private $noteTD;

    /**
     * @var float
     */
    private $noteTP;

    /**
     * @var float
     */
    private $noteEX;

    /**
     * @var string
     */
    private $qrcodeEtudiant;

    /**
     * @var integer
     */
    private $idMatiere;
  
    

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
     * Set noteDS1
     *
     * @param float $noteDS1
     *
     * @return Note
     */
    public function setNoteDS1($noteDS1)
    {
        $this->noteDS1 = $noteDS1;

        return $this;
    }

    /**
     * Get noteDS1
     *
     * @return float
     */
    public function getNoteDS1()
    {
        return $this->noteDS1;
    }

    /**
     * Set noteDS2
     *
     * @param float $noteDS2
     *
     * @return Note
     */
    public function setNoteDS2($noteDS2)
    {
        $this->noteDS2 = $noteDS2;

        return $this;
    }

    /**
     * Get noteDS2
     *
     * @return float
     */
    public function getNoteDS2()
    {
        return $this->noteDS2;
    }

    /**
     * Set noteTD
     *
     * @param float $noteTD
     *
     * @return Note
     */
    public function setNoteTD($noteTD)
    {
        $this->noteTD = $noteTD;

        return $this;
    }

    /**
     * Get noteTD
     *
     * @return float
     */
    public function getNoteTD()
    {
        return $this->noteTD;
    }

    /**
     * Set noteTP
     *
     * @param float $noteTP
     *
     * @return Note
     */
    public function setNoteTP($noteTP)
    {
        $this->noteTP = $noteTP;

        return $this;
    }

    /**
     * Get noteTP
     *
     * @return float
     */
    public function getNoteTP()
    {
        return $this->noteTP;
    }

    /**
     * Set noteEX
     *
     * @param float $noteEX
     *
     * @return Note
     */
    public function setNoteEX($noteEX)
    {
        $this->noteEX = $noteEX;

        return $this;
    }

    /**
     * Get noteEX
     *
     * @return float
     */
    public function getNoteEX()
    {
        return $this->noteEX;
    }

    /**
     * Set qrcodeEtudiant
     *
     * @param string $qrcodeEtudiant
     *
     * @return Note
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
     * Get idMatiere
     *
     * @return integer
     */
    function getIdMatiere() {
        return $this->idMatiere;
    }
       /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Matiere
     */

    function setIdMatiere(Matiere $idMatiere) {
        $this->idMatiere = $idMatiere;
    }

    
    /**
     * Get id
     *
     * @return integer
     */

    public function __toString() {
        return $this->qrcodeEtudiant;
    }

}

