<?php

namespace Admin\Bundle\Entity;

/**
 * Etablissement
 */
class Etablissement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomEtablissement;

    /**
     * @var string
     */
    private $adresseEtablissement;

    /**
     * @var integer
     */
    private $telEtablissement;

    /**
     * @var integer
     */
    private $faxEtablissement;

    /**
     * @var string
     */
    private $typeEtablissement;
    
    
    /**
     * @var string
     */
    private $mailEtablissement;

    
    /**
     * @var string
     */
    private $siteEtablissement;
    
    
    function getMailEtablissement() {
        return $this->mailEtablissement;
    }

    function getSiteEtablissement() {
        return $this->siteEtablissement;
    }

    function setMailEtablissement($mailEtablissement) {
        $this->mailEtablissement = $mailEtablissement;
    }

    function setSiteEtablissement($siteEtablissement) {
        $this->siteEtablissement = $siteEtablissement;
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
     * Set nomEtablissement
     *
     * @param string $nomEtablissement
     *
     * @return Etablissement
     */
    public function setNomEtablissement($nomEtablissement)
    {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    /**
     * Get nomEtablissement
     *
     * @return string
     */
    public function getNomEtablissement()
    {
        return $this->nomEtablissement;
    }

    /**
     * Set adresseEtablissement
     *
     * @param string $adresseEtablissement
     *
     * @return Etablissement
     */
    public function setAdresseEtablissement($adresseEtablissement)
    {
        $this->adresseEtablissement = $adresseEtablissement;

        return $this;
    }

    /**
     * Get adresseEtablissement
     *
     * @return string
     */
    public function getAdresseEtablissement()
    {
        return $this->adresseEtablissement;
    }

    /**
     * Set telEtablissement
     *
     * @param integer $telEtablissement
     *
     * @return Etablissement
     */
    public function setTelEtablissement($telEtablissement)
    {
        $this->telEtablissement = $telEtablissement;

        return $this;
    }

    /**
     * Get telEtablissement
     *
     * @return integer
     */
    public function getTelEtablissement()
    {
        return $this->telEtablissement;
    }

    /**
     * Set faxEtablissement
     *
     * @param integer $faxEtablissement
     *
     * @return Etablissement
     */
    public function setFaxEtablissement($faxEtablissement)
    {
        $this->faxEtablissement = $faxEtablissement;

        return $this;
    }

    /**
     * Get faxEtablissement
     *
     * @return integer
     */
    public function getFaxEtablissement()
    {
        return $this->faxEtablissement;
    }

    /**
     * Set typeEtablissement
     *
     * @param string $typeEtablissement
     *
     * @return Etablissement
     */
    public function setTypeEtablissement($typeEtablissement)
    {
        $this->typeEtablissement = $typeEtablissement;

        return $this;
    }

    /**
     * Get typeEtablissement
     *
     * @return string
     */
    public function getTypeEtablissement()
    {
        return $this->typeEtablissement;
    }
}

