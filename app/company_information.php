<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_information extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_informations';

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
    protected $fillable = ['company_name', 'registration_no', 'company_type', 'company_description', 'contact_person', 'contact_person_designation', 'landline_number', 'mobile_number', 'other_numbers', 'contact_email', 'website', 'adress', 'city', 'state', 'country', 'pincode', 'timezone'];
}
