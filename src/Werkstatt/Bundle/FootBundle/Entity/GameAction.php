<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\MappedSuperclass;

/**
 * GameAction
 * @MappedSuperclass
 */
abstract class GameAction
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
     * @ORM\Column(name="minute", type="smallint")
     */
    private $minute;

    /**
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Game")
     * @ORM\JoinColumn(nullable=false)
     */    
    private $game;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set minute
     *
     * @param integer $minute
     * @return GameAction
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * Get minute
     *
     * @return integer 
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Set game
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\Game $game
     * @return GameAction
     */
    public function setGame(\Werkstatt\FootBundle\Entity\Game $game)
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
}
