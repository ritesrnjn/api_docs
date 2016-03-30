<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Parameter extends Eloquent
{
    protected $table = 'parameters';

    protected $fillable = [
        'id',
        'method_id',
        'name',
        'in',
        'description',
        'required',
        'type'
    ];

    protected $hidden =[
        'id',
        'method_id'
    ];

    public $timestamps = false;

    public function getRequiredAttribute($required)
    {
        return (bool)$required;
    }

}