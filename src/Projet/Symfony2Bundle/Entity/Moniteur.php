<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moniteur
 *
 * @ORM\Table(name="moniteur", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})}, indexes={@ORM\Index(name="id_responsable_auto_ecole", columns={"id_responsable_auto_ecole"})})
 * @ORM\Entity(repositoryClass="Projet\Symfony2Bundle\Entity\MoniteurRepository")
 */
class Moniteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_moniteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMoniteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="num_cin", type="string", length=8, nullable=false)
     */
    private $numCin;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_tel", type="integer", nullable=false)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="date_de_naissance", type="string", length=20, nullable=false)
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsable_auto_ecole", type="integer", nullable=false)
     */
    private $idResponsableAutoEcole;



    /**
     * Get idMoniteur
     *
     * @return integer 
     */
    public function getIdMoniteur()
    {
        return $this->idMoniteur;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Moniteur
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
     * Set nom
     *
     * @param string $nom
     * @return Moniteur
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
     * Set numCin
     *
     * @param string $numCin
     * @return Moniteur
     */
    public function setNumCin($numCin)
    {
        $this->numCin = $numCin;

        return $this;
    }

    /**
     * Get numCin
     *
     * @return string 
     */
    public function getNumCin()
    {
        return $this->numCin;
    }

    /**
     * Set numTel
     *
     * @param integer $numTel
     * @return Moniteur
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return integer 
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Moniteur
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
     * Set dateDeNaissance
     *
     * @param string $dateDeNaissance
     * @return Moniteur
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return string 
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Moniteur
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
     * Set password
     *
     * @param string $password
     * @return Moniteur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set idResponsableAutoEcole
     *
     * @param integer $idResponsableAutoEcole
     * @return Moniteur
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
