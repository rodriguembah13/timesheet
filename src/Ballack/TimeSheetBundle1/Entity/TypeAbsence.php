<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAbsence
 *
 * @ORM\Table(name="type_absence")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\TypeAbsenceRepository")
 */
class TypeAbsence
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
     * @ORM\Column(name="dayoff", type="integer")
     */
    private $dayoff;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPayant", type="boolean")
     */
    private $isPayant;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage", type="float")
     */
    private $pourcentage;

    /**
     * @var string
     *
     * @ORM\Column(name="decription", type="string", length=255)
     */
    private $decription;


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
     * @return TypeAbsence
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
     * Set dayoff
     *
     * @param integer $dayoff
     *
     * @return TypeAbsence
     */
    public function setDayoff($dayoff)
    {
        $this->dayoff = $dayoff;

        return $this;
    }

    /**
     * Get dayoff
     *
     * @return int
     */
    public function getDayoff()
    {
        return $this->dayoff;
    }

    /**
     * Set isPayant
     *
     * @param boolean $isPayant
     *
     * @return TypeAbsence
     */
    public function setIsPayant($isPayant)
    {
        $this->isPayant = $isPayant;

        return $this;
    }

    /**
     * Get isPayant
     *
     * @return bool
     */
    public function getIsPayant()
    {
        return $this->isPayant;
    }

    /**
     * Set pourcentage
     *
     * @param float $pourcentage
     *
     * @return TypeAbsence
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return float
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set decription
     *
     * @param string $decription
     *
     * @return TypeAbsence
     */
    public function setDecription($decription)
    {
        $this->decription = $decription;

        return $this;
    }

    /**
     * Get decription
     *
     * @return string
     */
    public function getDecription()
    {
        return $this->decription;
    }
}

