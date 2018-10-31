<?php

use Norm\Schema\NormString;
use Norm\Schema\NormObject;
use Norm\Schema\NormText;
use Norm\Schema\Reference;

return array(
    'schema' => array(
        'user' => Reference::create('user')->to('User','$id','first_name')->set('list-column', true),
        'uri' => NormString::create('uri')->set('list-column', true),
        'method' => NormString::create('method')->set('list-column', true),
        'data' => NormObject::create('data')->set('list-column', true),
        'ip_address' => NormString::create('ip_address')->set('list-column', true),
        'user_agent' => NormText::create('user_agent')->set('list-column', true),
        'response' => NormString::create('response')->set('list-column', true),
        'activity' => NormString::create('activity')->filter('trim')->set('list-column', true),
    ),
);
