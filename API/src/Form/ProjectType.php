<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Project;
class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('contact')
        ->add('email')
        ->add('phone')
        ->add('address')
        ->add('city')
        ->add('postcode')
        ->add('description')
        ->add('userid')
        ->add('status')
        ->add('remaining')
        ->add('total_price')
        ->add('downpayment')
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Project::class,
            'csrf_protection' => false,
            "allow_extra_fields" => true //fuck Yannis le crado
        ));
    }
}
