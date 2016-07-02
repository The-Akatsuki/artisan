<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pay_grade;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class pay_gradeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index() {
        $pay_grade = pay_grade::paginate(15);

        return view('pay_grade.index', compact('pay_grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create() {
        $currency = \App\currency::lists('currency', 'id');
        return view('pay_grade.create', compact('currency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request) {
        $this->validate($request, ['pay_grade' => 'required',]);

        pay_grade::create($request->all());

        Session::flash('flash_message', 'pay_grade added!');

        return redirect('pay_grade');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id) {
        $pay_grade = pay_grade::findOrFail($id);

        return view('pay_grade.show', compact('pay_grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id) {
        $pay_grade = pay_grade::findOrFail($id);
        $currency = \App\currency::lists('currency', 'id');

        return view('pay_grade.edit', compact('pay_grade', 'currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request) {
        $this->validate($request, ['pay_grade' => 'required',]);

        $pay_grade = pay_grade::findOrFail($id);
        $pay_grade->update($request->all());

        Session::flash('flash_message', 'pay_grade updated!');

        return redirect('pay_grade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id) {
        pay_grade::destroy($id);

        Session::flash('flash_message', 'pay_grade deleted!');

        return redirect('pay_grade');
    }

}
