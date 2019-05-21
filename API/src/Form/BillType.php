<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Bill;
class BillType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('bill_number')
            ->add('description1')
            ->add('unit_price1')
            ->add('quantity1')
            ->add('description2')
            ->add('unit_price2')
            ->add('quantity2')
            ->add('description3')
            ->add('unit_price3')
            ->add('quantity3')
            ->add('description4')
            ->add('unit_price4')
            ->add('quantity4')
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Bill::class,
            'csrf_protection' => false
        ));
    }
}