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
     * @ORM\OneToMany(targetEntity="Werkstatt\Bundle\FootBundle\Entity\GameTeam", mappedBy="game",cascade={"persist"})
     */
    private $gameTeams;
    
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
        $this->date     = new \Datetime;
        $this->gameTeams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->addGameTeam(new GameTeam);
        $this->addGameTeam(new GameTeam);
    }

  

    /**
     * Add gameTeam
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam
     * @return Game
     */
    public function addGameTeam(\Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam)
    {
        $this->gameTeams[] = $gameTeam;
        $gameTeam->setGame($this); // On ajoute ceci
        return $this;
    }

    /**
     * Remove gameTeam
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam
     */
    public function removeGameTeam(\Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam)
    {
        $this->gameTeams->removeElement($gameTeam);
    }

    /**
     * Get gameTeams
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGameTeams()
    {
        return $this->gameTeams;
    }
}
