<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Werkstatt\Bundle\FootBundle\Entity\GameRepository")
 */
class Game
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="Werkstatt\Bundle\FootBundle\Entity\GameTeam", mappedBy="game")
     */
    private $gameTeam;
    
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
     * Set date
     *
     * @param \DateTime $date
     * @return Game
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gameTeam = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gameTeam
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam
     * @return Game
     */
    public function addGameTeam(\Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam)
    {
        $this->gameTeam[] = $gameTeam;

        return $this;
    }

    /**
     * Remove gameTeam
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam
     */
    public function removeGameTeam(\Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam)
    {
        $this->gameTeam->removeElement($gameTeam);
    }

    /**
     * Get gameTeam
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGameTeam()
    {
        return $this->gameTeam;
    }
}
