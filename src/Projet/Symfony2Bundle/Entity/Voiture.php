<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="id_responsable_auto_ecole", columns={"id_responsable_auto_ecole"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_voiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=20, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation", type="string", length=20, nullable=false)
     */
    private $immatriculation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsable_auto_ecole", type="integer", nullable=false)
     */
    private $idResponsableAutoEcole;



    /**
     * Get idVoiture
     *
     * @return integer 
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set immatriculation
     *
     * @param string $immatriculation
     * @return Voiture
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string 
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Voiture
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set idResponsableAutoEcole
     *
     * @param integer $idResponsableAutoEcole
     * @return Voiture
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
