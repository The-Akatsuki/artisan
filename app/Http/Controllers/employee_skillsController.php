<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\employee_skill;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class employee_skillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $employee_skills = employee_skill::paginate(15);

        return view('employee_skills.index', compact('employee_skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $employees = \App\employee::lists('employee_name', 'id');
        $skills = \App\skill::lists('skill','id');
        return view('employee_skills.create', compact('employees', 'skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['employee_id' => 'required', 'skills_id' => 'required', ]);

        employee_skill::create($request->all());

        Session::flash('flash_message', 'employee_skill added!');

        return redirect('employee_skills');
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
        $employee_skill = employee_skill::findOrFail($id);
       
        return view('employee_skills.show', compact('employee_skill'));
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
        $employee_skill = employee_skill::findOrFail($id);

        $employees = \App\employee::lists('employee_name', 'id');
        $skills = \App\skill::lists('skill','id');        
        
        return view('employee_skills.edit', compact('employee_skill', 'employees', 'skills'));
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
        $this->validate($request, ['employee_id' => 'required', 'skills_id' => 'required', ]);

        $employee_skill = employee_skill::findOrFail($id);
        $employee_skill->update($request->all());

        Session::flash('flash_message', 'employee_skill updated!');

        return redirect('employee_skills');
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
        employee_skill::destroy($id);

        Session::flash('flash_message', 'employee_skill deleted!');

        return redirect('employee_skills');
    }
}
