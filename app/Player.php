<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'face_photo' => 'required',
        'team' => 'required',
        'coach' => 'required',
        'position' => 'required',
        'dominant_foot' => 'required',
        'good_play' => 'required',
        'long_term_goal' => 'required',
        'short_term_goal' => 'required',
    );
}
