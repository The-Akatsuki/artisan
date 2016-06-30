<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['state_id', 'city_name', 'status'];

}
