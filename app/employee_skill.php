<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_skill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_skills';

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
    protected $fillable = ['employee_id', 'skills_id', 'details'];
    
    public function get_employee(){
        return $this->belongsTo('\App\employee', 'employee_id');
    }
    
    public function get_skill(){
        return $this->belongsTo('\App\skill', 'skills_id');
    }
}
