<?php

namespace Werkstatt\Bundle\FootBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GameType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
    
            ->add('date','date',array(
                'widget' =>'single_text',
                'format' =>'dd/MM/yyyy',
                'attr' => array('class' => 'date'),
                'label' =>"Date du match"
                 ))
            ->add(  'gameTeams', 'collection', array(
                    'type'   => new GameTeamType,'error_bubbling' => false));

    }


    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Werkstatt\Bundle\FootBundle\Entity\Game'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'werkstatt_game_type';
    }
}
