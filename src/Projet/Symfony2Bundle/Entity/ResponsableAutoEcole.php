<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsableAutoEcole
 *
 * @ORM\Table(name="responsable_auto_ecole", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity(repositoryClass="Projet\Symfony2Bundle\Entity\ResponsableAutoEcoleRepository")
 */
class ResponsableAutoEcole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsable_auto_ecole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResponsableAutoEcole;

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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=8, nullable=false)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=false)
     */
    private $password;



    /**
     * Get idResponsableAutoEcole
     *
     * @return integer 
     */
    public function getIdResponsableAutoEcole()
    {
        return $this->idResponsableAutoEcole;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return ResponsableAutoEcole
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
     * @return ResponsableAutoEcole
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
     * @return ResponsableAutoEcole
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
     * Set email
     *
     * @param string $email
     * @return ResponsableAutoEcole
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
     * Set numTel
     *
     * @param string $numTel
     * @return ResponsableAutoEcole
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return string 
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return ResponsableAutoEcole
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
}
