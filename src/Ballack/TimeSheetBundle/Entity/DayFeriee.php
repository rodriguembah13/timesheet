<?php

namespace Ballack\TimeSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DayFeriee
 *
 * @ORM\Table(name="day_feriee")
 * @ORM\Entity(repositoryClass="Ballack\TimeSheetBundle\Repository\DayFerieeRepository")
 */
class DayFeriee
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
     * @ORM\Column(name="occasion", type="string", length=255)
     */
    private $occasion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


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
     * Set occasion
     *
     * @param string $occasion
     *
     * @return DayFeriee
     */
    public function setOccasion($occasion)
    {
        $this->occasion = $occasion;

        return $this;
    }

    /**
     * Get occasion
     *
     * @return string
     */
    public function getOccasion()
    {
        return $this->occasion;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DayFeriee
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

