<?php

namespace Rottenwood\GurpsBundle\Form;

use Rottenwood\GurpsBundle\Entity\Skill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SkillType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('name')
            ->add('nameRussian')
            ->add('description')
            ->add('modificators')
            ->add('attribute',
                  'choice',
                  [
                      'choices' => Skill::getAttributeNames(),
                  ])
            ->add('difficulty',
                  'choice',
                  [
                      'choices' => Skill::getDifficultyNames(),
                  ])
            ->add('byDefault')
            ->add('TL');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults([
                                   'data_class' => 'Rottenwood\GurpsBundle\Entity\Skill'
                               ]);
    }

    /**
     * @return string
     */
    public function getName() {
        return 'rottenwood_gurpsbundle_skill';
    }
}
