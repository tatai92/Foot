<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameTeam
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GameTeam
{


    /**
     * @var integer
     *
     * @ORM\Column(name="nb_goals", type="smallint")
     */
    private $nbGoals;


    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Game",  inversedBy="gameTeam")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Team",  inversedBy="gameTeam")
     * @ORM\JoinColumn(nullable=false)
     */
    private $team;
    

    /**
     * Set nbGoals
     *
     * @param integer $nbGoals
     * @return GameTeam
     */
    public function setNbGoals($nbGoals)
    {
        $this->nbGoals = $nbGoals;

        return $this;
    }

    /**
     * Get nbGoals
     *
     * @return integer 
     */
    public function getNbGoals()
    {
        return $this->nbGoals;
    }

    /**
     * Set game
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\Game $game
     * @return GameTeam
     */
    public function setGame(\Werkstatt\Bundle\FootBundle\Entity\Game $game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \Werkstatt\Bundle\FootBundle\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set team
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\Team $team
     * @return GameTeam
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
}
