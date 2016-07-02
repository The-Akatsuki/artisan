<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments';

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
    protected $fillable = ['department_name', 'description', 'company_id', 'department_head', 'parent_department', 'sequence_order'];

    public function get_company(){
        return $this->belongsTo('\App\company_information', 'company_id');
    }
    
}
