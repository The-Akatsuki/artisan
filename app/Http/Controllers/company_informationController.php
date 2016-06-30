<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\company_information;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class company_informationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index() {
        $company_information = company_information::paginate(15);

        return view('company_information.index', compact('company_information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create() {
        $countries = \App\countries::all('country_name', 'id');
        $states = \App\state::all('country_id', 'state_name', 'id');
        $cities = \App\cities::all('state_id', 'city_name', 'id');
        return view('company_information.create', compact('countries', 'states', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request) {
        $this->validate($request, ['company_name' => 'required', 'registration_no' => 'required',]);

        company_information::create($request->all());

        Session::flash('flash_message', 'company_information added!');

        return redirect('company_information');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id) {
        $company_information = company_information::findOrFail($id);

        return view('company_information.show', compact('company_information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id) {
        $countries = \App\countries::all('country_name', 'id');
        $states = \App\state::all('country_id', 'state_name', 'id');
        $cities = \App\cities::all('state_id', 'city_name', 'id');
        $company_information = company_information::findOrFail($id);

        return view('company_information.edit', compact('company_information', 'countries', 'states', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request) {
        $this->validate($request, ['company_name' => 'required', 'registration_no' => 'required',]);

        $company_information = company_information::findOrFail($id);
        $company_information->update($request->all());

        Session::flash('flash_message', 'company_information updated!');

        return redirect('company_information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id) {
        company_information::destroy($id);

        Session::flash('flash_message', 'company_information deleted!');

        return redirect('company_information');
    }

}
