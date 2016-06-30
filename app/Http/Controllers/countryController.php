<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\country;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class countryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $country = country::paginate(15);

        return view('country.index', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, ['country_name' => 'required',]);

        country::create($request->all());

        Session::flash('flash_message', 'country added!');

        return redirect('country');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id) {
        $country = country::findOrFail($id);

        return view('country.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id) {
        $country = country::findOrFail($id);

        return view('country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request) {
        $this->validate($request, ['country_name' => 'required',]);

        $country = country::findOrFail($id);
        $country->update($request->all());

        Session::flash('flash_message', 'country updated!');

        return redirect('country');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id) {
        country::destroy($id);

        Session::flash('flash_message', 'country deleted!');

        return redirect('country');
    }

}
