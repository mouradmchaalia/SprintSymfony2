<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv", indexes={@ORM\Index(name="id_candidat", columns={"id_candidat"}), @ORM\Index(name="id_moniteur", columns={"id_moniteur"})})
 * @ORM\Entity(repositoryClass="Projet\Symfony2Bundle\Entity\RdvRepository")
 */
class Rdv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rdv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRdv;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_heure", type="integer", nullable=false)
     */
    private $nbreHeure;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=20, nullable=false)
     */
    private $lieu;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_candidat", referencedColumnName="id_candidat")
     * })
     */
    private $idCandidat;

    /**
     * @var \Moniteur
     *
     * @ORM\ManyToOne(targetEntity="Moniteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_moniteur", referencedColumnName="id_moniteur")
     * })
     */
    private $idMoniteur;



    /**
     * Get idRdv
     *
     * @return integer 
     */
    public function getIdRdv()
    {
        return $this->idRdv;
    }

    /**
     * Set nbreHeure
     *
     * @param integer $nbreHeure
     * @return Rdv
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
     * Set date
     *
     * @param string $date
     * @return Rdv
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
     * Set lieu
     *
     * @param string $lieu
     * @return Rdv
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set idCandidat
     *
     * @param \Projet\Symfony2Bundle\Entity\Candidat $idCandidat
     * @return Rdv
     */
    public function setIdCandidat(\Projet\Symfony2Bundle\Entity\Candidat $idCandidat = null)
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }

    /**
     * Get idCandidat
     *
     * @return \Projet\Symfony2Bundle\Entity\Candidat 
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }

    /**
     * Set idMoniteur
     *
     * @param \Projet\Symfony2Bundle\Entity\Moniteur $idMoniteur
     * @return Rdv
     */
    public function setIdMoniteur(\Projet\Symfony2Bundle\Entity\Moniteur $idMoniteur = null)
    {
        $this->idMoniteur = $idMoniteur;

        return $this;
    }

    /**
     * Get idMoniteur
     *
     * @return \Projet\Symfony2Bundle\Entity\Moniteur 
     */
    public function getIdMoniteur()
    {
        return $this->idMoniteur;
    }
}
