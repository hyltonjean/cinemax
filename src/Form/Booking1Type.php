<?php

namespace App\Form;

use App\Entity\Time;
use App\Entity\Movie;
use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class Booking1Type extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $this->security->getUser();
        $builder
            ->add('theater', null, ['required' => true])
            ->add('movie', null, ['required' => true])
            ->add('no_of_seats')
            ->add('booking_time', EntityType::class, [
                'class'    => Time::class,
                'choice_label' => 'time',
                'required' => true

            ])
            ->add('ticket_no', HiddenType::class)
            ->add('cancel_status', HiddenType::class, [
                'empty_data' => false,
            ])
            ->add('user', HiddenType::class, [
                'empty_data' => $user,
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class
        ]);
    }
}
