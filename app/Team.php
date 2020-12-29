<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'prefecture' => 'required',
        );
}
