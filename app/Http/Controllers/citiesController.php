<?php

namespace App\Http\Controllers\city;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\cities;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class citiesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $cities = cities::paginate(15);
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, ['cities_name' => 'required',]);

        cities::create($request->all());

        Session::flash('flash_message', 'cities added!');

        return redirect('cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id) {
        $cities = cities::findOrFail($id);

        return view('cities.show', compact('cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id) {
        $cities = cities::findOrFail($id);

        return view('cities.edit', compact('cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request) {
        $this->validate($request, ['cities_name' => 'required',]);

        $cities = cities::findOrFail($id);
        $cities->update($request->all());

        Session::flash('flash_message', 'cities updated!');

        return redirect('cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id) {
        cities::destroy($id);

        Session::flash('flash_message', 'cities deleted!');

        return redirect('cities');
    }

    /*
     *  Get State by Country_id
     */

    public function getcity($state_id) {
        $cities = cities::where('state_id', $state_id)->get();
        return response()->json($cities)->header('Access-Control-Allow-Origin', '*')
                        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
                        ->header('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, Origin');
    }

}
