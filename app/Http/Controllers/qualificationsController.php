<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\qualification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class qualificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $qualifications = qualification::paginate(15);

        return view('qualifications.index', compact('qualifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('qualifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['qualification' => 'required', ]);

        qualification::create($request->all());

        Session::flash('flash_message', 'qualification added!');

        return redirect('qualifications');
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
        $qualification = qualification::findOrFail($id);

        return view('qualifications.show', compact('qualification'));
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
        $qualification = qualification::findOrFail($id);

        return view('qualifications.edit', compact('qualification'));
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
        $this->validate($request, ['qualification' => 'required', ]);

        $qualification = qualification::findOrFail($id);
        $qualification->update($request->all());

        Session::flash('flash_message', 'qualification updated!');

        return redirect('qualifications');
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
        qualification::destroy($id);

        Session::flash('flash_message', 'qualification deleted!');

        return redirect('qualifications');
    }
}
