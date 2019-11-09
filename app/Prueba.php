<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $fillable = ['name', 'description'];


    public function getRouteKeyName(){
        return 'slug';
    }
}
