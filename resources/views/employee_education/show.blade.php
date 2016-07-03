@extends('layouts.app')

@section('content')
<div class="container">

    <h1>employee_education {{ $employee_education->id }}
        <a href="{{ url('employee_education/' . $employee_education->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit employee_education"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['employee_education', $employee_education->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete employee_education',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $employee_education->id }}</td>
                </tr>
                <tr><th> Employee Id </th><td> {{ $employee_education->employee_id }} </td></tr><tr><th> Qualification Id </th><td> {{ $employee_education->qualification_id }} </td></tr><tr><th> Institute </th><td> {{ $employee_education->institute }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
