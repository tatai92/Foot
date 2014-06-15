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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_goals", type="smallint")
     */
    private $nbGoals;


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
}
