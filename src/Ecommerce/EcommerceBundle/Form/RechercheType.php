<?php
namespace Ecommerce\EcommerceBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RechercheType extends AbstractType
{
    public function buildForm(FormbuilderInterface $builder, array $option)
    {
        $builder
        ->add('recherche',TextAreaType::class, array(
            'attr' =>  array('class' => 'form-control' ))
        )
        ->add('submit', SubmitType::class, array(
            'attr'  => array('class' => 'btn btn-primary mb-2', 'label' => 'valider'))
        );
    }

    public function getName()
    {
        return 'ecommerce_ecommercebundle_recherche';
    }
}
