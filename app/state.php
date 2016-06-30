<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['country_id', 'state_name', 'state_code', 'map_point_x', 'map_point_y', 'status'];

}
