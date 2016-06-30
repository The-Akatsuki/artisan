@extends('layouts.app')

@section('content')
<div class="container">

    <h1>department {{ $department->id }}
        <a href="{{ url('department/' . $department->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit department"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['department', $department->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete department',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $department->id }}</td>
                </tr>
                <tr><th> Department Name </th><td> {{ $department->department_name }} </td></tr><tr><th> Description </th><td> {{ $department->description }} </td></tr><tr><th> Company Id </th><td> {{ $department->company_id }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
