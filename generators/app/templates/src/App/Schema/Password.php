<?php

namespace App\Schema;

use Norm\Type\Secret as Secret;
use Norm\Schema\Field;

class Password extends Field
{
    public function toJSON($value)
    {
        return null;
    }

    public function formatPlain($value, $entry = null)
    {
        return '';
    }

    public function formatInput($value, $entry = null)
    {
        return '
            <div class="row">
                <div class="col-md-6">
                    <input class="span6" type="password" name="'.$this['name'].
                    '" value="" placeholder="Password" autocomplete="off" />
                </div>
                <div class="col-md-6">
                    <input class="span-6" type="password" name="'.$this['name'].'_confirmation" value="" placeholder="Password confirmation" autocomplete="off" />
                </div>
            </div>
        ';
    }

    public function formatReadonly($value, $entry = null)
    {
        return '<span class="field">*hidden*</span>';
    }

    public function prepare($value)
    {
        if ($value instanceof Secret) {
            return $value;
        } elseif (empty($value)) {
            return null;
        } else {
            return new Secret($value);
        }
    }
}
