<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\ActiviteRepository")
 */
class Activite {

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
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeStart", type="datetime")
     */
    private $timeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestop", type="datetime")
     */
    private $timestop;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Employe")
     */
    private $employe;
    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Projet")
     */
    private $projet;
    function __construct() {
        $this->dateCreation = new \Datetime();
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Activite
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Set timeStart
     *
     * @param \DateTime $timeStart
     *
     * @return Activite
     */
    public function setTimeStart($timeStart) {
        $this->timeStart = $timeStart;

        return $this;
    }

    /**
     * Get timeStart
     *
     * @return \DateTime
     */
    public function getTimeStart() {
        return $this->timeStart;
    }

    /**
     * Set timestop
     *
     * @param \DateTime $timestop
     *
     * @return Activite
     */
    public function setTimestop($timestop) {
        $this->timestop = $timestop;

        return $this;
    }

    /**
     * Get timestop
     *
     * @return \DateTime
     */
    public function getTimestop() {
        return $this->timestop;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Activite
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
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

    /**
     * Set projet
     *
     * @param Ballack\TimeSheetBundle\Entity\Projet $projet
     * 
     */
    function getProjet() {
        return $this->projet;
    }

    function setProjet($projet) {
        $this->projet = $projet;
    }

}
