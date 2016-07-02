<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class employeeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index() {
        $employee = employee::paginate(15);

        return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create() {
        $job_type = ['' => 'Select Job Type'] + \App\job_type::lists('job_type', 'id')->toArray();
        $job_title = ['' => 'Select Job Title'] + \App\job_title::lists('job_title', 'id')->toArray();
        $pay_grade = ['' => 'Select Pay Grade'] + \App\pay_grade::lists('pay_grade', 'id')->toArray();

        $countries = \App\countries::all('country_name', 'id');
        $states = \App\state::all('country_id', 'state_name', 'id');
        $cities = \App\cities::all('state_id', 'city_name', 'id');

        $company = ['' => 'Select Company'] + (\App\company_information::lists('company_name', 'id')->toArray());

        $departments = \App\department::all('department_name', 'id', 'company_id');

        return view('employee.create', compact('job_type', 'job_title', 'pay_grade', 'countries', 'states', 'cities', 'company', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request) {
        $this->validate($request, ['employee_name' => 'required', 'employee_code' => 'required',]);

        employee::create($request->all());

        Session::flash('flash_message', 'employee added!');

        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id) {
        $employee = employee::findOrFail($id);

        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id) {
        $job_type = ['' => 'Select Job Type'] + \App\job_type::lists('job_type', 'id')->toArray();
        $job_title = ['' => 'Select Job Title'] + \App\job_title::lists('job_title', 'id')->toArray();
        $pay_grade = ['' => 'Select Pay Grade'] + \App\pay_grade::lists('pay_grade', 'id')->toArray();

        $countries = \App\countries::all('country_name', 'id');
        $states = \App\state::all('country_id', 'state_name', 'id');
        $cities = \App\cities::all('state_id', 'city_name', 'id');

        $company = ['' => 'Select Company'] + (\App\company_information::lists('company_name', 'id')->toArray());
        $departments = \App\department::all('department_name', 'id', 'company_id');


        $employee = employee::findOrFail($id);

        return view('employee.edit', compact('employee', 'job_type', 'job_title', 'pay_grade', 'countries', 'states', 'cities', 'company', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request) {
        $this->validate($request, ['employee_name' => 'required', 'employee_code' => 'required',]);

        $employee = employee::findOrFail($id);
        $employee->update($request->all());

        Session::flash('flash_message', 'employee updated!');

        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id) {
        employee::destroy($id);

        Session::flash('flash_message', 'employee deleted!');

        return redirect('employee');
    }

}
