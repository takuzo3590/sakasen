<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'e-mail' => 'required',
        'birthday' => 'required',
        'team' => 'required',
    );
}