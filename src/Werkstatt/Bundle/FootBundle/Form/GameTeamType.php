<?php

namespace Werkstatt\Bundle\FootBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GameTeamType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         
            ->add('team', 'entity', array(
                  'class'    => 'WerkstattFootBundle:Team',
                  'property' => 'name',
                  'multiple' => false)
                 )
            ->add('nbGoals', 'choice', array(
    'choices'   => range(0,20),
    'empty_value' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Werkstatt\Bundle\FootBundle\Entity\GameTeam'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'werkstatt_game_team_type';
    }
}
