<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RdvTemp
 *
 * @ORM\Table(name="rdv_temp")
 * @ORM\Entity
 */
class RdvTemp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rdv_temp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRdvTemp;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_heure", type="integer", nullable=false)
     */
    private $nbreHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="lieu", type="integer", nullable=false)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_candidat", type="integer", nullable=false)
     */
    private $idCandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rdv", type="integer", nullable=false)
     */
    private $idRdv;



    /**
     * Get idRdvTemp
     *
     * @return integer 
     */
    public function getIdRdvTemp()
    {
        return $this->idRdvTemp;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return RdvTemp
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbreHeure
     *
     * @param integer $nbreHeure
     * @return RdvTemp
     */
    public function setNbreHeure($nbreHeure)
    {
        $this->nbreHeure = $nbreHeure;

        return $this;
    }

    /**
     * Get nbreHeure
     *
     * @return integer 
     */
    public function getNbreHeure()
    {
        return $this->nbreHeure;
    }

    /**
     * Set lieu
     *
     * @param integer $lieu
     * @return RdvTemp
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return integer 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set idCandidat
     *
     * @param integer $idCandidat
     * @return RdvTemp
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
     * Set idRdv
     *
     * @param integer $idRdv
     * @return RdvTemp
     */
    public function setIdRdv($idRdv)
    {
        $this->idRdv = $idRdv;

        return $this;
    }

    /**
     * Get idRdv
     *
     * @return integer 
     */
    public function getIdRdv()
    {
        return $this->idRdv;
    }
}
