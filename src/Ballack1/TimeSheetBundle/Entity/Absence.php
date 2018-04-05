<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table(name="absence")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\AbsenceRepository")
 */
class Absence {

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
     * @var string
     *
     * @ORM\Column(name="statutChef", type="string")
     */
    private $statutChef;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string")
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="string", length=255, nullable=true)
     */
    private $remarque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Employe")
     */
    private $employe;
    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\TypeAbsence")
     */
    private $typeAbsence;
    function __construct() {
        $this->date = new \Datetime();
        $this->statut="attente";
        $this->statutChef="attente";
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Absence
     */
    public function setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Absence
     */
    public function setEndDate($endDate) {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * Set statutChef
     *
     * @param boolean $statutChef
     *
     * @return Absence
     */
    public function setStatutChef($statutChef) {
        $this->statutChef = $statutChef;

        return $this;
    }

    /**
     * Get statutChef
     *
     * @return bool
     */
    public function getStatutChef() {
        return $this->statutChef;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Absence
     */
    public function setStatut($statut) {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     *
     * @return Absence
     */
    public function setRemarque($remarque) {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string
     */
    public function getRemarque() {
        return $this->remarque;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Absence
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }
     /**
     * Set Employe
     *
     * @param Ballack\TimeSheetBundle\Entity\Employe $employe
     * 
     */
    function getEmploye() {
        return $this->employe;
    }

    function setEmploye( $employe) {
        $this->employe = $employe;
    }
    function getTypeAbsence() {
        return $this->typeAbsence;
    }

    function setTypeAbsence( $typeAbsence) {
        $this->typeAbsence = $typeAbsence;
    }



}
