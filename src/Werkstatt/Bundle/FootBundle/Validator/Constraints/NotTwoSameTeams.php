<?php

namespace Werkstatt\Bundle\FootBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class NotTwoSameTeams extends Constraint
{
    public $message = 'Vous ne pouvez pas sélectionner 2 fois la même équipe. ';
}