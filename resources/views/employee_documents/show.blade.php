@extends('layouts.app')

@section('content')
<div class="container">

    <h1>employee_document {{ $employee_document->id }}
        <a href="{{ url('employee_documents/' . $employee_document->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit employee_document"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['employee_documents', $employee_document->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete employee_document',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $employee_document->id }}</td>
                </tr>
                <tr><th> Employee Id </th><td> {{ $employee_document->employee_id }} </td></tr><tr><th> Document Name </th><td> {{ $employee_document->document_name }} </td></tr><tr><th> Description </th><td> {{ $employee_document->description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
