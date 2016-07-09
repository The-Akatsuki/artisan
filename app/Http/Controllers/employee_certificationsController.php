<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\employee_certification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class employee_certificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $employee_certifications = employee_certification::paginate(15);

        return view('employee_certifications.index', compact('employee_certifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $employees = \App\employee::lists('employee_name', 'id');
        $certification = \App\certification::lists('certification', 'id');
        return view('employee_certifications.create', compact('employees','certification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['employee_id' => 'required', 'certification_id' => 'required', ]);

        employee_certification::create($request->all());

        Session::flash('flash_message', 'employee_certification added!');

        return redirect('employee_certifications');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $employee_certification = employee_certification::findOrFail($id);

        return view('employee_certifications.show', compact('employee_certification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $employee_certification = employee_certification::findOrFail($id);

        $employees = \App\employee::lists('employee_name', 'id');
        $certification = \App\certification::lists('certification', 'id');
        return view('employee_certifications.edit', compact('employee_certification','employees','certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['employee_id' => 'required', 'certification_id' => 'required', ]);

        $employee_certification = employee_certification::findOrFail($id);
        $employee_certification->update($request->all());

        Session::flash('flash_message', 'employee_certification updated!');

        return redirect('employee_certifications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        employee_certification::destroy($id);

        Session::flash('flash_message', 'employee_certification deleted!');

        return redirect('employee_certifications');
    }
}
