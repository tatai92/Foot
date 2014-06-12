<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goal
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Goal
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
     * @ORM\ManyToOne(targetEntity="Werkstatt\Bundle\FootBundle\Entity\Matche")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matche;
    
    
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
     * @return Goal
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
     * Set matche
     *
     * @param \Werkstatt\Bundle\FootBundle\Entity\Matche $matche
     * @return Goal
     */
    public function setMatche(\Werkstatt\Bundle\FootBundle\Entity\Matche $matche)
    {
        $this->matche = $matche;

        return $this;
    }

    /**
     * Get matche
     *
     * @return \Werkstatt\Bundle\FootBundle\Entity\Matche 
     */
    public function getMatche()
    {
        return $this->matche;
    }
}
