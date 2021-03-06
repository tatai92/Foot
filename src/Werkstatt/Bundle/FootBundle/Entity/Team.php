<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Team
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Werkstatt\Bundle\FootBundle\Entity\TeamRepository")
 */
class Team
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Werkstatt\Bundle\FootBundle\Entity\GameTeam", mappedBy="team")
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
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gameTeams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->name="";
    }

    /**
     * Add gameTeams
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeams
     * @return Team
     */
    public function addGameTeam(\Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeam)
    {
        $this->gameTeams[] = $gameTeam;
        return $this;
    }

    /**
     * Remove gameTeams
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\GameTeam $gameTeams
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
