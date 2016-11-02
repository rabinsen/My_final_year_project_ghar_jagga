<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProperty extends Model
{
    protected $fillable = [
        'thumbnail',
        'slide1',
        'slide2',
//        'slide3'
    ];

    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
