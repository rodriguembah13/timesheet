<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employe
 *
 * @ORM\Table(name="employe")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\EmployeRepository")
 */
class Employe
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=255)
     */
    private $situation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;
    /**
     * @var bool
     *
     * @ORM\Column(name="isChef", type="boolean")
     */
    private $isChef;
    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Departement")
     */
    private $departement;
    /**
     * @ORM\OneToOne(targetEntity="Ballack\UserBundle\Entity\User")
     */
    private $compte;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please, upload the product brochure as a image file.")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $image;
    /**
     * @ORM\ManyToMany(targetEntity="Ballack\TimeSheetBundle\Entity\Projet", mappedBy="employes")
     */
    private $projets;
          /**
     *
     * @ORM\OneToMany(targetEntity="Ballack\TimeSheetBundle\Entity\Activite", mappedBy="employe")
     */

    private $activites;
    /**
     * @var integer
     *
     * @ORM\Column(name="soldeVacances", type="integer")
     */
    private $soldeVacances;
    public function getImage()
    {
        return $this->image;
    }
    public function getProjets()
    {
        return $this->projets;
    }
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Employe
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Employe
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
     * Set situation
     *
     * @param string $situation
     *
     * @return Employe
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Employe
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    function getIsChef()
    {
        return $this->isChef;
    }

    function getDepartement()
    {
        return $this->departement;
    }

    function setIsChef($isChef)
    {
        $this->isChef = $isChef;
    }

    function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    function setCompte($compte)
    {
        $this->compte = $compte;
    }

    function getCompte()
    {
        return $this->compte;
    }
    public function getUniqueName()
    {
        return sprintf('%s - %s :: %s', $this->nom,$this->prenom,$this->departement->getDepartement());
    }
    function getActivites() {
        return $this->activites;
    }
    function getSoldeVacances() {
        return $this->soldeVacances;
    }

    function setSoldeVacances($soldeVacances) {
        $this->soldeVacances = $soldeVacances;
    }


  
}

