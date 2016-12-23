<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrEpreuve
 *
 * @ORM\Table(name="corr_epreuve", indexes={@ORM\Index(name="id_candidat", columns={"id_candidat"})})
 * @ORM\Entity
 */
class CorrEpreuve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_corr_epreuve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCorrEpreuve;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_candidat", type="integer", nullable=false)
     */
    private $idCandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_epreuve", type="integer", nullable=false)
     */
    private $idEpreuve;

    /**
     * @var integer
     *
     * @ORM\Column(name="arret", type="integer", nullable=false)
     */
    private $arret;

    /**
     * @var integer
     *
     * @ORM\Column(name="croisement", type="integer", nullable=false)
     */
    private $croisement;

    /**
     * @var integer
     *
     * @ORM\Column(name="infraction", type="integer", nullable=false)
     */
    private $infraction;

    /**
     * @var integer
     *
     * @ORM\Column(name="mecanique", type="integer", nullable=false)
     */
    private $mecanique;

    /**
     * @var integer
     *
     * @ORM\Column(name="priorite", type="integer", nullable=false)
     */
    private $priorite;

    /**
     * @var integer
     *
     * @ORM\Column(name="reglementation", type="integer", nullable=false)
     */
    private $reglementation;

    /**
     * @var integer
     *
     * @ORM\Column(name="secourisme", type="integer", nullable=false)
     */
    private $secourisme;

    /**
     * @var integer
     *
     * @ORM\Column(name="signalisation", type="integer", nullable=false)
     */
    private $signalisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="tmd", type="integer", nullable=false)
     */
    private $tmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="vitesse", type="integer", nullable=false)
     */
    private $vitesse;



    /**
     * Get idCorrEpreuve
     *
     * @return integer 
     */
    public function getIdCorrEpreuve()
    {
        return $this->idCorrEpreuve;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return CorrEpreuve
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set idCandidat
     *
     * @param integer $idCandidat
     * @return CorrEpreuve
     */
    public function setIdCandidat($idCandidat)
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }

    /**
     * Get idCandidat
     *
     * @return integer 
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }

    /**
     * Set idEpreuve
     *
     * @param integer $idEpreuve
     * @return CorrEpreuve
     */
    public function setIdEpreuve($idEpreuve)
    {
        $this->idEpreuve = $idEpreuve;

        return $this;
    }

    /**
     * Get idEpreuve
     *
     * @return integer 
     */
    public function getIdEpreuve()
    {
        return $this->idEpreuve;
    }

    /**
     * Set arret
     *
     * @param integer $arret
     * @return CorrEpreuve
     */
    public function setArret($arret)
    {
        $this->arret = $arret;

        return $this;
    }

    /**
     * Get arret
     *
     * @return integer 
     */
    public function getArret()
    {
        return $this->arret;
    }

    /**
     * Set croisement
     *
     * @param integer $croisement
     * @return CorrEpreuve
     */
    public function setCroisement($croisement)
    {
        $this->croisement = $croisement;

        return $this;
    }

    /**
     * Get croisement
     *
     * @return integer 
     */
    public function getCroisement()
    {
        return $this->croisement;
    }

    /**
     * Set infraction
     *
     * @param integer $infraction
     * @return CorrEpreuve
     */
    public function setInfraction($infraction)
    {
        $this->infraction = $infraction;

        return $this;
    }

    /**
     * Get infraction
     *
     * @return integer 
     */
    public function getInfraction()
    {
        return $this->infraction;
    }

    /**
     * Set mecanique
     *
     * @param integer $mecanique
     * @return CorrEpreuve
     */
    public function setMecanique($mecanique)
    {
        $this->mecanique = $mecanique;

        return $this;
    }

    /**
     * Get mecanique
     *
     * @return integer 
     */
    public function getMecanique()
    {
        return $this->mecanique;
    }

    /**
     * Set priorite
     *
     * @param integer $priorite
     * @return CorrEpreuve
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;

        return $this;
    }

    /**
     * Get priorite
     *
     * @return integer 
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set reglementation
     *
     * @param integer $reglementation
     * @return CorrEpreuve
     */
    public function setReglementation($reglementation)
    {
        $this->reglementation = $reglementation;

        return $this;
    }

    /**
     * Get reglementation
     *
     * @return integer 
     */
    public function getReglementation()
    {
        return $this->reglementation;
    }

    /**
     * Set secourisme
     *
     * @param integer $secourisme
     * @return CorrEpreuve
     */
    public function setSecourisme($secourisme)
    {
        $this->secourisme = $secourisme;

        return $this;
    }

    /**
     * Get secourisme
     *
     * @return integer 
     */
    public function getSecourisme()
    {
        return $this->secourisme;
    }

    /**
     * Set signalisation
     *
     * @param integer $signalisation
     * @return CorrEpreuve
     */
    public function setSignalisation($signalisation)
    {
        $this->signalisation = $signalisation;

        return $this;
    }

    /**
     * Get signalisation
     *
     * @return integer 
     */
    public function getSignalisation()
    {
        return $this->signalisation;
    }

    /**
     * Set tmd
     *
     * @param integer $tmd
     * @return CorrEpreuve
     */
    public function setTmd($tmd)
    {
        $this->tmd = $tmd;

        return $this;
    }

    /**
     * Get tmd
     *
     * @return integer 
     */
    public function getTmd()
    {
        return $this->tmd;
    }

    /**
     * Set vitesse
     *
     * @param integer $vitesse
     * @return CorrEpreuve
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get vitesse
     *
     * @return integer 
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }
}
