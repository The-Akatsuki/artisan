<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_certification extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_certifications';

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
    protected $fillable = ['employee_id', 'certification_id', 'institute', 'granted_on', 'valid_upto'];
    
     public function get_employee(){
        return $this->belongsTo('\App\employee', 'employee_id');
    }
    
    public function get_certification(){
        return $this->belongsTo('\App\certification', 'certification_id');
    }
}
