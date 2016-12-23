<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoEcole
 *
 * @ORM\Table(name="auto_ecole")
 * @ORM\Entity
 */
class AutoEcole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_auto_ecole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAutoEcole;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_patente", type="integer", nullable=false)
     */
    private $numPatente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsable_auto_ecole", type="integer", nullable=false)
     */
    private $idResponsableAutoEcole;



    /**
     * Get idAutoEcole
     *
     * @return integer 
     */
    public function getIdAutoEcole()
    {
        return $this->idAutoEcole;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return AutoEcole
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
     * Set libelle
     *
     * @param string $libelle
     * @return AutoEcole
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set numPatente
     *
     * @param integer $numPatente
     * @return AutoEcole
     */
    public function setNumPatente($numPatente)
    {
        $this->numPatente = $numPatente;

        return $this;
    }

    /**
     * Get numPatente
     *
     * @return integer 
     */
    public function getNumPatente()
    {
        return $this->numPatente;
    }

    /**
     * Set idResponsableAutoEcole
     *
     * @param integer $idResponsableAutoEcole
     * @return AutoEcole
     */
    public function setIdResponsableAutoEcole($idResponsableAutoEcole)
    {
        $this->idResponsableAutoEcole = $idResponsableAutoEcole;

        return $this;
    }

    /**
     * Get idResponsableAutoEcole
     *
     * @return integer 
     */
    public function getIdResponsableAutoEcole()
    {
        return $this->idResponsableAutoEcole;
    }
}
