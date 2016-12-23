<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_notification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotification;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediteur", type="integer", nullable=false)
     */
    private $expediteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="lu", type="integer", nullable=false)
     */
    private $lu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rdv", type="integer", nullable=false)
     */
    private $idRdv;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rdv_temp", type="integer", nullable=false)
     */
    private $idRdvTemp;



    /**
     * Get idNotification
     *
     * @return integer 
     */
    public function getIdNotification()
    {
        return $this->idNotification;
    }

    /**
     * Set expediteur
     *
     * @param integer $expediteur
     * @return Notification
     */
    public function setExpediteur($expediteur)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expediteur
     *
     * @return integer 
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set lu
     *
     * @param integer $lu
     * @return Notification
     */
    public function setLu($lu)
    {
        $this->lu = $lu;

        return $this;
    }

    /**
     * Get lu
     *
     * @return integer 
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * Set idRdv
     *
     * @param integer $idRdv
     * @return Notification
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

    /**
     * Set idRdvTemp
     *
     * @param integer $idRdvTemp
     * @return Notification
     */
    public function setIdRdvTemp($idRdvTemp)
    {
        $this->idRdvTemp = $idRdvTemp;

        return $this;
    }

    /**
     * Get idRdvTemp
     *
     * @return integer 
     */
    public function getIdRdvTemp()
    {
        return $this->idRdvTemp;
    }
}
