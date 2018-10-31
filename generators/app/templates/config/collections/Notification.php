<?php

use Norm\Schema\NormString;
use Norm\Schema\NormInteger;
use Norm\Schema\NormText;
use Norm\Schema\Reference;

return array(
    'schema' => array(
        'title' => NormString::create('title')->filter('trim|required')->set('list-column', true),
        'uri' => NormString::create('uri')->set('list-column', true),
        'message' => NormString::create('message')->set('list-column', true),
        'user' => Reference::create('user')->set('list-column', true)->to('User'),
        'type' => Reference::create('long_value')->set('list-column', true)->to(array(1 =>'System',2 =>'Email',4 => 'Other')),
    ),
);