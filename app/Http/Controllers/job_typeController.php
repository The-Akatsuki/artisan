<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\job_type;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class job_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $job_type = job_type::paginate(15);

        return view('job_type.index', compact('job_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('job_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['job_type' => 'required', ]);

        job_type::create($request->all());

        Session::flash('flash_message', 'job_type added!');

        return redirect('job_type');
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
        $job_type = job_type::findOrFail($id);

        return view('job_type.show', compact('job_type'));
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
        $job_type = job_type::findOrFail($id);

        return view('job_type.edit', compact('job_type'));
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
        $this->validate($request, ['job_type' => 'required', ]);

        $job_type = job_type::findOrFail($id);
        $job_type->update($request->all());

        Session::flash('flash_message', 'job_type updated!');

        return redirect('job_type');
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
        job_type::destroy($id);

        Session::flash('flash_message', 'job_type deleted!');

        return redirect('job_type');
    }
}
