<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'contents' => 'required',
        'strength' => 'required',
        'condition' => 'required',
        'task' => 'required',
        'next_theme' => 'required',
    );
}
