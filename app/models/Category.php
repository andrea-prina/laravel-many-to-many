<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'color',
        'slug',
    ];

    public function posts(){
        return $this->hasMany('App\models\Post');
    }
}
