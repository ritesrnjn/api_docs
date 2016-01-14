<?php

use Illuminate\Database\Eloquent\Model as Eloquent;


class Method extends Eloquent
{
    protected $table = 'methods';

    protected $fillable = [
        'id',
        'tags',
        'method',
        'description',
        'route_id'
    ];

    public $timestamps = false;


    public function parameters(){
        return $this->hasMany('Parameter');
    }

    public function route(){
        return $this->belongsTo('Route');
    }

    public function getMethodAttribute($method)
    {
        return strtolower($method);
    }
}