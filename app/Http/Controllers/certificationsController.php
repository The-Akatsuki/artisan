<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\certification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class certificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $certifications = certification::paginate(15);

        return view('certifications.index', compact('certifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('certifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['certification' => 'required', ]);

        certification::create($request->all());

        Session::flash('flash_message', 'certification added!');

        return redirect('certifications');
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
        $certification = certification::findOrFail($id);

        return view('certifications.show', compact('certification'));
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
        $certification = certification::findOrFail($id);

        return view('certifications.edit', compact('certification'));
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
        $this->validate($request, ['certification' => 'required', ]);

        $certification = certification::findOrFail($id);
        $certification->update($request->all());

        Session::flash('flash_message', 'certification updated!');

        return redirect('certifications');
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
        certification::destroy($id);

        Session::flash('flash_message', 'certification deleted!');

        return redirect('certifications');
    }
}
