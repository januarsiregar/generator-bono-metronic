<?php

use Norm\Schema\String;
use Norm\Schema\Integer;
use Norm\Schema\Text;

return array(
    'schema' => array(
        'groups' => String::create('groups')->filter('trim|required')->set('list-column', true),
        'keyz' => Integer::create('keyz', 'Key')->filter('trim|required')->set('list-column', true),
        'value' => String::create('value')->filter('trim|required')->set('list-column', true),
        'order_param' => Integer::create('order_param')->filter('trim|required')->set('list-column', true),
        'long_value' => Text::create('long_value')->filter('trim')->set('list-column', true),
    ),
);