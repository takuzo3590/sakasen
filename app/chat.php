<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
    'contents' => 'required'
    );
}
