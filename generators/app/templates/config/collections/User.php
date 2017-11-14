<?php

use Norm\Schema\NormString;
use App\Schema\Password;
use App\Schema\RoleArray;
use App\Schema\SelectTwoReference;
use App\Schema\MultiReference;
use App\Schema\DatePicker;

return array(
    'schema' => array(
        'first_name' => NormString::create('first_name')->filter('trim|required')->set('list-column', true),
        'last_name' => NormString::create('last_name')->filter('trim|required'),
        'username' => NormString::create('username')->filter('trim|required|unique:User,username')->set('list-column', true),
        'normalized_username' => NormString::create('normalized_username')->filter('trim')->set('list-column', true)->set('hidden',true),
        'email' => NormString::create('email')->filter('trim|required|unique:User,email')->set('list-column', true),
        'password' => Password::create('password')->filter('trim|confirmed|salt'),
        'birthday' => DatePicker::create('birthday')->filter('trim'),
        'gender' => NormString::create('gender')->filter('trim')->set('list-column', true),
        'mobile_phone' => NormString::create('mobile_phone')->filter('trim')->set('list-column', true),
        'address' => NormString::create('address')->filter('trim'),
        'role'    => MultiReference::create('role')
                    ->to('Role', '$id', 'name')
    ),
);