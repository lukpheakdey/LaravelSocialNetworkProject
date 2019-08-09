<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function likes()
    {
        //return $this->hasMany('App\Like');
    }
}
