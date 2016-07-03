<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\employee_education;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class employee_educationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $employee_education = employee_education::paginate(15);

        return view('employee_education.index', compact('employee_education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('employee_education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['employee_id' => 'required', 'qualification_id' => 'required', ]);

        employee_education::create($request->all());

        Session::flash('flash_message', 'employee_education added!');

        return redirect('employee_education');
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
        $employee_education = employee_education::findOrFail($id);

        return view('employee_education.show', compact('employee_education'));
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
        $employee_education = employee_education::findOrFail($id);

        return view('employee_education.edit', compact('employee_education'));
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
        $this->validate($request, ['employee_id' => 'required', 'qualification_id' => 'required', ]);

        $employee_education = employee_education::findOrFail($id);
        $employee_education->update($request->all());

        Session::flash('flash_message', 'employee_education updated!');

        return redirect('employee_education');
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
        employee_education::destroy($id);

        Session::flash('flash_message', 'employee_education deleted!');

        return redirect('employee_education');
    }
}
