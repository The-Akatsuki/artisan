<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currency extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'currencies';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['country', 'currency', 'symbol', 'codeiso', 'hexsymbol', 'status'];

}
