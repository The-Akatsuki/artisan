@extends('layouts.app')

@section('content')
<div class="container">

    <h1>employee_skill {{ $employee_skill->id }}
        <a href="{{ url('employee_skills/' . $employee_skill->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit employee_skill"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['employee_skills', $employee_skill->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete employee_skill',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $employee_skill->id }}</td>
                </tr>
                <tr><th> Employee Id </th><td> {{ $employee_skill->employee_id }} </td></tr><tr><th> Skills Id </th><td> {{ $employee_skill->skills_id }} </td></tr><tr><th> Details </th><td> {{ $employee_skill->details }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
