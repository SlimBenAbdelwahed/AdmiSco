<?php

namespace Admin\Bundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table()
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $qrcode;

    /**
     * @var string
     */
    private $cin;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var \DateTime
     */
    private $datenaissance;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $idFiliere;
     /**
     * @var integer
     */
    private $idNiveau;
     /**
     * @var integer
     */
    private $idDiplome;
     /**
     * @var integer
     */
    private $idGroupe;
    
    
    function getIdGroupe() {
        return $this->idGroupe;
    }

    function setIdGroupe(groupe $idGroupe) {
        $this->idGroupe = $idGroupe;
    }

    
    function getIdNiveau() {
return $this->idNiveau;
}

 function getIdDiplome() {
return $this->idDiplome;
}

 function setIdNiveau(niveau $idNiveau) {
$this->idNiveau = $idNiveau;
}
function setId($id) {
    $this->id = $id;
}

 function setIdDiplome(diplome $idDiplome) {
$this->idDiplome = $idDiplome;
}


    /* * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qrcode
     *
     * @param string $qrcode
     *
     * @return Etudiant
     */
    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;

        return $this;
    }

    /**
     * Get qrcode
     *
     * @return string
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Etudiant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etudiant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Etudiant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return Etudiant
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Etudiant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set idFiliere
     *
     * @param integer $idFiliere
     *
     * @return Etudiant
     */
    public function setIdFiliere(filiere $idFiliere)
    {
        $this->idFiliere = $idFiliere;

        return $this;
    }

    /**
     * Get idFiliere
     *
     * @return integer
     */
    public function getIdFiliere()
    {
        return $this->idFiliere;
    }
    public function __toString() {
       return $this->qrcode; 
    }

}

