<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Route extends Eloquent
{
    protected $table = 'routes';
    protected $fillable = [
        'id',
        'name'
    ];

    public $timestamps = false;

    public function methods(){
        return $this->hasMany('Method');
    }

}