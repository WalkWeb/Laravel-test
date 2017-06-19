<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servise extends Model
{
    //
    protected $fillable = ['id', 'name', 'description', 'images', 'icon', 'text'];
}
