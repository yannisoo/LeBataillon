<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Quotation;
class QuotationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('contact')
        ->add('address')
        ->add('city')
        ->add('postcode')
        ->add('project_name')
        ->add('project_contact')
        ->add('project_address')
        ->add('project_client')
        ->add('project_city')
        ->add('project_postcode')
        ->add('quotation_number')
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
        ->add('description5')
        ->add('unit_price5')
        ->add('quantity5')
        ->add('description6')
        ->add('unit_price6')
        ->add('quantity6')
        ->add('description7')
        ->add('unit_price7')
        ->add('quantity7')
        ->add('description8')
        ->add('unit_price8')
        ->add('quantity8')
        ->add('description9')
        ->add('unit_price9')
        ->add('quantity9')
        ->add('description10')
        ->add('unit_price10')
        ->add('quantity10')
        ->add('description11')
        ->add('unit_price11')
        ->add('quantity11')
        ->add('description12')
        ->add('unit_price12')
        ->add('quantity12')
        ->add('description13')
        ->add('unit_price13')
        ->add('quantity13')
        ->add('description14')
        ->add('unit_price14')
        ->add('quantity14')
        ->add('description15')
        ->add('unit_price15')
        ->add('quantity15')
        ->add('project_id')
        ->add('created_at')
        ->add('pdf_path')
        ->add('price_total')
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Quotation::class,
            'csrf_protection' => false,
            "allow_extra_fields" => true
        ));
    }
}
