<?php

namespace Werkstatt\Bundle\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goal
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Goal extends GameAction
{


    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="smallint")
     */
    private $note;

    /**
     * Set note
     *
     * @param integer $note
     * @return Goal
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }
}
