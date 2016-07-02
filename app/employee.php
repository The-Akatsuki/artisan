<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

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
    protected $fillable = ['employee_name', 'employee_code', 'company_id', 'department_id', 'nationality', 'date_of_birth', 'gender', 'marital_status', 'mobile_number', 'landline', 'email', 'address', 'city', 'state', 'country', 'pincode', 'job_type', 'job_title', 'pay_grade', 'joining_date', 'termination_date', 'supevisor', 'notes'];

    public function get_job_type() {
        return $this->belongsTo('\App\job_type', 'job_type');
    }

    public function get_job_title() {
        return $this->belongsTo('\App\job_title', 'job_title');
    }

    public function get_pay_grade() {
        return $this->belongsTo('\App\pay_grade', 'pay_grade');
    }

}
