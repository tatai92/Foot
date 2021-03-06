<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_goals", type="smallint")
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     */
    private $nbGoals;


    /**
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Game",  inversedBy="gameTeams")
     * @ORM\JoinColumn(nullable=false)
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Team",  inversedBy="gameTeams")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $team;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \Datetime;
        $this->nbGoals = 0;
   
         
    }
    
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
        $team->addGameTeam($this);
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
