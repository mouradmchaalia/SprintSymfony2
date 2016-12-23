<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuve
 *
 * @ORM\Table(name="epreuve")
 * @ORM\Entity
 */
class Epreuve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_epreuve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEpreuve;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_epreuve", type="string", length=20, nullable=false)
     */
    private $nomEpreuve;



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
     * Set nomEpreuve
     *
     * @param string $nomEpreuve
     * @return Epreuve
     */
    public function setNomEpreuve($nomEpreuve)
    {
        $this->nomEpreuve = $nomEpreuve;

        return $this;
    }

    /**
     * Get nomEpreuve
     *
     * @return string 
     */
    public function getNomEpreuve()
    {
        return $this->nomEpreuve;
    }
}
