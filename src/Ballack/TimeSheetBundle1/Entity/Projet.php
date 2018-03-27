<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ballack\TimeSheetBundle\Entity\Employe;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="nomProjet", type="string", length=255)
     */
    private $nomProjet;

    /**
     * @ORM\ManyToOne(targetEntity="Ballack\TimeSheetBundle\Entity\Client")
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="datetime")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStop", type="datetime")
     */
    private $dateStop;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Ballack\TimeSheetBundle\Entity\Employe")
     */

    private $employes;
 

    public function __construct(){
        $this->employes=new \Doctrine\Common\Collections\ArrayCollection();
        $this->statut=FALSE;
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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Projet
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Projet
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateStop
     *
     * @param \DateTime $dateStop
     *
     * @return Projet
     */
    public function setDateStop($dateStop)
    {
        $this->dateStop = $dateStop;

        return $this;
    }

    /**
     * Get dateStop
     *
     * @return \DateTime
     */
    public function getDateStop()
    {
        return $this->dateStop;
    }
/*    public function addEmploye($employe)
    {
        $this->employes[]=$employe;
    }*/
    public function addEmploye(Employe $employe)
    {
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->employes->contains($employe)) {
            $this->employes->add($employe);
        }
    }
    public function setEmployes($items)
    {
        if ($items instanceof ArrayCollection || is_array($items)) {
            foreach ($items as $item) {
                $this->addEmploye($item);
            }
        } elseif ($items instanceof Employe) {
            $this->addEmploye($items);
        } else {
            throw new Exception("$items must be an instance of Employe or ArrayCollection");
        }
    }
    public function removeEmploye($employe)
    {
        $this->employes[]=$employe->removeElement($employe);
    }
    public function getEmployes()
    {
        return $this->employes;
    }
   /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Projet
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

}

