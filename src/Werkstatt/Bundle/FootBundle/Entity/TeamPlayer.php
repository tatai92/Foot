<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamPlayer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TeamPlayer
{


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date")
     */
    private $endDate;


    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Team")
     * @ORM\JoinColumn(nullable=false)
     */
    private $team;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Player")
     * @ORM\JoinColumn(nullable=false)
     */
    private $player;    
    
    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return TeamPlayer
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
     * @return TeamPlayer
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
     * Set team
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\Team $team
     * @return TeamPlayer
     */
    public function setTeam(\Werkstatt\Bundle\FootBundle\Entity\Team $team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Werkstatt\Bundle\FootBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set player
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\Player $player
     * @return TeamPlayer
     */
    public function setPlayer(\Werkstatt\Bundle\FootBundle\Entity\Player $player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \Werkstatt\Bundle\FootBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }
}
