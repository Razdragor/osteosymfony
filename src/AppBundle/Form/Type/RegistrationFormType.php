<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Suscriber\AddDefaultRoleListener;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // Ajoutez vos champs ici, revoilà notre champ *location* :
        $builder->add('firstname', TextType::class);
        $builder->add('lastname', TextType::class);

        $builder->add('role', ChoiceType::class, array(
            'choices'   => array(
                'Patient'   => 'PATIENT',
                'Professionnel' => 'PROF'
            )
        ));
        $builder->addEventSubscriber(new AddDefaultRoleListener());
    }

public function getParent()
{
    return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    // Or for Symfony < 2.8
    // return 'fos_user_registration';
}

public function getBlockPrefix()
{
    return 'app_user_registration';
}

// For Symfony 2.x
public function getName()
{
    return $this->getBlockPrefix();
}
}