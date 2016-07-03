<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\employee_document;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class employee_documentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $employee_documents = employee_document::paginate(15);

        return view('employee_documents.index', compact('employee_documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('employee_documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['employee_id' => 'required', 'document_name' => 'required', ]);

        employee_document::create($request->all());

        Session::flash('flash_message', 'employee_document added!');

        return redirect('employee_documents');
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
        $employee_document = employee_document::findOrFail($id);

        return view('employee_documents.show', compact('employee_document'));
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
        $employee_document = employee_document::findOrFail($id);

        return view('employee_documents.edit', compact('employee_document'));
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
        $this->validate($request, ['employee_id' => 'required', 'document_name' => 'required', ]);

        $employee_document = employee_document::findOrFail($id);
        $employee_document->update($request->all());

        Session::flash('flash_message', 'employee_document updated!');

        return redirect('employee_documents');
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
        employee_document::destroy($id);

        Session::flash('flash_message', 'employee_document deleted!');

        return redirect('employee_documents');
    }
}
