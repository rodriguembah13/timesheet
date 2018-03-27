<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;

    /**
     * @var float
     *
     * @ORM\Column(name="salaireBrute", type="float")
     */
    private $salaireBrute;

    /**
     * @var string
     *
     * @ORM\Column(name="typeContrat", type="string", length=255, nullable=true)
     */
    private $typeContrat;
    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Employe")
     */
    private $employe;

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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Contrat
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Contrat
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set salaireBrute
     *
     * @param float $salaireBrute
     *
     * @return Contrat
     */
    public function setSalaireBrute($salaireBrute)
    {
        $this->salaireBrute = $salaireBrute;

        return $this;
    }

    /**
     * Get salaireBrute
     *
     * @return float
     */
    public function getSalaireBrute()
    {
        return $this->salaireBrute;
    }

    /**
     * Set typeContrat
     *
     * @param string $typeContrat
     *
     * @return Contrat
     */
    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return string
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }
        /**
     * Set Employe
     *
     * @param TimesheetBundle\Entity\Employe $employe
     * 
     */
    function getEmploye() {
        return $this->employe;
    }

    function setEmploye($employe) {
        $this->employe = $employe;
    }
}


