<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_title extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'job_titles';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['job_title', 'description'];
}
