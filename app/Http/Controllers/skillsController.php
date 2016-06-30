<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\skill;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class skillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $skills = skill::paginate(15);

        return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['skill_name' => 'required', ]);

        skill::create($request->all());

        Session::flash('flash_message', 'skill added!');

        return redirect('skills');
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
        $skill = skill::findOrFail($id);

        return view('skills.show', compact('skill'));
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
        $skill = skill::findOrFail($id);

        return view('skills.edit', compact('skill'));
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
        $this->validate($request, ['skill_name' => 'required', ]);

        $skill = skill::findOrFail($id);
        $skill->update($request->all());

        Session::flash('flash_message', 'skill updated!');

        return redirect('skills');
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
        skill::destroy($id);

        Session::flash('flash_message', 'skill deleted!');

        return redirect('skills');
    }
}
