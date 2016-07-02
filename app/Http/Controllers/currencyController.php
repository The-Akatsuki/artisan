<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\currency;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class currencyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $currency = currency::paginate(15);

        return view('currency.index', compact('currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        currency::create($request->all());

        Session::flash('flash_message', 'currency added!');

        return redirect('currency');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $currency = currency::findOrFail($id);

        return view('currency.show', compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $currency = currency::findOrFail($id);

        return view('currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $currency = currency::findOrFail($id);
        $currency->update($request->all());

        Session::flash('flash_message', 'currency updated!');

        return redirect('currency');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        currency::destroy($id);

        Session::flash('flash_message', 'currency deleted!');

        return redirect('currency');
    }

}
