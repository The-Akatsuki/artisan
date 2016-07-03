@extends('layouts.app')

@section('content')
<div class="container">

    <h1>employee_certification {{ $employee_certification->id }}
        <a href="{{ url('employee_certifications/' . $employee_certification->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit employee_certification"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['employee_certifications', $employee_certification->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete employee_certification',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $employee_certification->id }}</td>
                </tr>
                <tr><th> Employee Id </th><td> {{ $employee_certification->employee_id }} </td></tr><tr><th> Certification Id </th><td> {{ $employee_certification->certification_id }} </td></tr><tr><th> Institute </th><td> {{ $employee_certification->institute }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
