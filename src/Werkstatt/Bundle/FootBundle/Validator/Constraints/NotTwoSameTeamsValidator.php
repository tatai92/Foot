<?php

namespace Werkstatt\Bundle\FootBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class NotTwoSameTeamsValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if($value[0]->getTeam()->getId() == $value[1]->getTeam()->getId()){ 
         //$this->context->addViolationAt('gameTeams', $constraint->message, array(), null);/
            $this->context->addViolation($constraint->message);
        }
    }
}