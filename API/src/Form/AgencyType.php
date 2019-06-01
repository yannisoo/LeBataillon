<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Agency;
class AgencyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('city')
            ->add('signature')
            ->add('SIREP')
            ->add('phone_work')
            ->add('phone_mobile')
            ->add('email')
            ->add('rib_key')
            ->add('iban')
            ->add('bic')
            ->add('counter_code')
            ->add('bank_code')
            ->add('zone_agency')
            ->add('account_number')
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Agency::class,
            'csrf_protection' => false,
            "allow_extra_fields" => true
        ));
    }
}
