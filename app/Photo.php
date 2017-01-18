<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $uploads = "/images";

    public function getNameAttribute($value){
        return $this->uploads . '/' . $value;
    }
}
