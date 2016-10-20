<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $choices = [];
        foreach ($options['data'] as $option) {
            foreach ($option as $kit) {
                $choices[$kit->getId()] = $kit->getId() . ' - ' . $kit->getName();
            }
        }

        $builder->setMethod('post');

        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'attr'     => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'style' => 'margin-top:10px;',
                ],
            ])
            ->add('kitId', ChoiceType::class, [
                'required' => true,
                'attr'     => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'style' => 'margin-top:10px;',
                ],
                'choices'  => $choices,
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
                'attr'     => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'style' => 'margin-top:10px;',
                ],
            ])
            ->add('image', TextareaType::class, [
                'label' => 'Images (separated by comma)',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'i.e. https://www.image.jpg,https://www.image.jpg',
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'style' => 'margin-top:10px;',
                ],
            ])
            ->add('price', TextType::class, [
                'required' => true,
                'attr'     => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'style' => 'margin-top:10px;',
                ],
            ])
            ->add('Submit', SubmitType::class, [
                'attr'     => [
                    'class' => 'form-control',
                    'style' => 'margin-top:10px; ',
                ],
            ])
        ;
    }

    public function getName()
    {
        return 'create_product';
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
            'data' => null
        ]);
    }
}
