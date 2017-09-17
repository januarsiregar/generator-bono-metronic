<?php

use Norm\Schema\String;
use App\Schema\InputMask;
use App\Schema\Thumbnail;
use App\Schema\FileUpload;
use Norm\Schema\Reference;
use App\Schema\SelectTwoReference;
use App\Schema\MultiReference;
use App\Schema\DatePicker;
use App\Schema\SysparamReference;
 

return array(
    'schema' => array(
        'photo'   => Thumbnail::create('photo','Gambar')->set('list-column', true)->set('bucket','storage'),
        'nama'   => String::create('nama')->set('list-column', true)->filter('trim|required'),
        'alamat'      => String::create('alamat')->set('list-column', true)->filter('trim|required'),
        'ktp'      => InputMask::create('ktp')->set('list-column', true)->set_mask('99-9999-99_99.999'),
        'file2' => FileUpload::create('file2')->set('list-column', true),
        
        'file' => FileUpload::create('file')->set('list-column', true)->set('bucket','storage1'),
        'dropdown' => Reference::create('dropdown')->to(array('a'=>'testing1','b'=> 'test2')),
        'select' => SelectTwoReference::create('select')->to(array('a'=>'testing1','b'=> 'test2')),
        'role' => MultiReference::create('role')->to('Role'),
        'role2' => MultiReference::create('role2')->to('Role'),
        'testdate' => DatePicker::create('testdate')->setformatdate('dd/mm/yyyy'),
        'testdate2' => DatePicker::create('testdate2')->setformatdate('dd/mm/yyyy'),
        'sysparam' => SysparamReference::create('sysparam')->setGroups('test'),

        ),
);