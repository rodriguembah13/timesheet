<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeContrat
 *
 * @ORM\Table(name="type_contrat")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\TypeContratRepository")
 */
class TypeContrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="vacances", type="integer")
     */
    private $vacances;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeContrat
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
     * Set vacances
     *
     * @param integer $vacances
     *
     * @return TypeContrat
     */
    public function setVacances($vacances)
    {
        $this->vacances = $vacances;

        return $this;
    }

    /**
     * Get vacances
     *
     * @return int
     */
    public function getVacances()
    {
        return $this->vacances;
    }
}

