<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_education extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_educations';

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
    protected $fillable = ['employee_id', 'qualification_id', 'institute', 'start_date', 'completed_on'];
    
     public function get_employee(){
        return $this->belongsTo('\App\employee', 'employee_id');
    }
    
    public function get_qualification(){
        return $this->belongsTo('\App\qualification', 'qualification_id');
    }
}
