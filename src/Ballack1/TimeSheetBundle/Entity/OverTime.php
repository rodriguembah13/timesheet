<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OverTime
 *
 * @ORM\Table(name="over_time")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\OverTimeRepository")
 */
class OverTime {

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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="Duree", type="float")
     */
    private $duree;

    /**
     * @var text
     *
     * @ORM\Column(name="cause", type="text")
     */
    private $cause;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string")
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Employe")
     */
    private $employe;

    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Projet")
     */
    private $projet;
    function __construct() {
        $this->statut = "attente";
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return OverTime
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
     * Set duree
     *
     * @param integer $duree
     *
     * @return OverTime
     */
    public function setDuree($duree) {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Set cause
     *
     * @param string $cause
     *
     * @return OverTime
     */
    public function setCause($cause) {
        $this->cause = $cause;

        return $this;
    }

    /**
     * Get cause
     *
     * @return string
     */
    public function getCause() {
        return $this->cause;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return OverTime
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

    function getEmploye() {
        return $this->employe;
    }

    function setEmploye($employe) {
        $this->employe = $employe;
    }

    function getProjet() {
        return $this->projet;
    }

    function setProjet($projet) {
        $this->projet = $projet;
    }

}
