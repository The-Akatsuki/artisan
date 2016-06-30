<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['country_name', 'country_code', 'status'];

   /**
    * Get States for a Particular Country
    * 
    * @object states   
    */
    public function get_states(){
        return $this->hasMany('\App\state', 'country_id');
    }
    
}
