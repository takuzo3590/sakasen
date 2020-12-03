<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'mail_address' => 'required',
        'birthday' => 'required',
        'body' => 'required',
    );
}