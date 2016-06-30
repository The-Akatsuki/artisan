<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\department;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class departmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $department = department::paginate(15);

        return view('department.index', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $companies =  ['' => 'Select Company'] + (\App\company_information::lists('company_name', 'id')->toArray());
        
        $departments = ['' => 'Select Parent Department'] + (\App\department::lists('department_name','id')->toArray());
        
        return view('department.create', compact('companies', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['department_name' => 'required', 'company_id' => 'required', ]);

        department::create($request->all());

        Session::flash('flash_message', 'department added!');

        return redirect('department');
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
        $department = department::findOrFail($id);

        return view('department.show', compact('department'));
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
        $department = department::findOrFail($id);

        $companies =  ['' => 'Select Company'] + (\App\company_information::lists('company_name', 'id')->toArray());
        
        $departments = ['' => 'Select Parent Department'] + (\App\department::lists('department_name','id')->toArray());
        
        return view('department.edit', compact('department', 'companies', 'departments'));
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
        $this->validate($request, ['department_name' => 'required', 'company_id' => 'required', ]);

        $department = department::findOrFail($id);
        $department->update($request->all());

        Session::flash('flash_message', 'department updated!');

        return redirect('department');
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
        department::destroy($id);

        Session::flash('flash_message', 'department deleted!');

        return redirect('department');
    }
}
