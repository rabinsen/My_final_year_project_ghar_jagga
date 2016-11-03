<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
          'title',
          'price',
          'type',
        'status',
        'readyToMove',
        'address',
        'city',
        'country',
        'mapLocation',
        'landArea',
        'houseArea',
        'plotted',
        'storey',
        'bedroom',
        'bathroom',
        'kitchen',
        'roadDistance',
        'description',
        'image'


    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function group(){
        return $this->belongsTo('App\Group');
    }

    public function images(){
        return $this->hasOne('App\ImageProperty');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function map(){
        return $this->hasOne('App\Map');
    }
}
