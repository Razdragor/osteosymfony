<?php

namespace AppBundle\Faker\Provider;

use Faker\Provider\Base as BaseProvider;

final class UserTypeProvider extends BaseProvider
{
    const USER_TYPE = [
        'Patient',
        'Professional',
        'Employee',
        'Company',
        'Admin'
    ];
}