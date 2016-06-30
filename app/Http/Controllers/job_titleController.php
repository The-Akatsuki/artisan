<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\job_title;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class job_titleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $job_title = job_title::paginate(15);

        return view('job_title.index', compact('job_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('job_title.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['job_title' => 'required', ]);

        job_title::create($request->all());

        Session::flash('flash_message', 'job_title added!');

        return redirect('job_title');
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
        $job_title = job_title::findOrFail($id);

        return view('job_title.show', compact('job_title'));
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
        $job_title = job_title::findOrFail($id);

        return view('job_title.edit', compact('job_title'));
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
        $this->validate($request, ['job_title' => 'required', ]);

        $job_title = job_title::findOrFail($id);
        $job_title->update($request->all());

        Session::flash('flash_message', 'job_title updated!');

        return redirect('job_title');
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
        job_title::destroy($id);

        Session::flash('flash_message', 'job_title deleted!');

        return redirect('job_title');
    }
}
