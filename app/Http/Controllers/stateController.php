<?php

namespace App\Http\Controllers\state;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\state;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class stateController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $state = state::paginate(15);

        return view('state.index', compact('state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, ['country_id' => 'required', 'state_name' => 'required',]);

        state::create($request->all());

        Session::flash('flash_message', 'state added!');

        return redirect('state');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id) {
        $state = state::findOrFail($id);

        return view('state.show', compact('state'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id) {
        $state = state::findOrFail($id);

        return view('state.edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request) {
        $this->validate($request, ['country_id' => 'required', 'state_name' => 'required',]);

        $state = state::findOrFail($id);
        $state->update($request->all());

        Session::flash('flash_message', 'state updated!');

        return redirect('state');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id) {
        state::destroy($id);
        Session::flash('flash_message', 'state deleted!');
        return redirect('state');
    }

    /*
     *  Get State by Country_id
     */

    public function getstates($country_id) {
        $states = state::where('country_id', $country_id)->get();
        return response()->json($states)->header('Access-Control-Allow-Origin', '*')
                        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
                        ->header('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, Origin');
    }

}
