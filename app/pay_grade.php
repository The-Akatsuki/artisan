<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pay_grade extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pay_grades';

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
    protected $fillable = ['pay_grade', 'currency', 'min_salary', 'max_salary'];
    
    public function get_currency(){
        return $this->belongsTo('\App\currency', 'currency');
    }
}
