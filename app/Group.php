<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name'
    ];

    public function cProperties()
    {
        return $this->hasMany('App\Property');
    }
}
