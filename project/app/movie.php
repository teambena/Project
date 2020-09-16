<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    //
    protected $fillable = [ 'image', 'movie_name', 'description', 'price'];
}
