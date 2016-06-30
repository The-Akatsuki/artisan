@extends('layouts.app')

@section('content')
<div class="container">

    <h1>company_information {{ $company_information->id }}
        <a href="{{ url('company_information/' . $company_information->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit company_information"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['company_information', $company_information->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete company_information',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $company_information->id }}</td>
                </tr>
                <tr><th> Company Name </th><td> {{ $company_information->company_name }} </td></tr><tr><th> Registration No </th><td> {{ $company_information->registration_no }} </td></tr><tr><th> Company Type </th><td> {{ $company_information->company_type }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
