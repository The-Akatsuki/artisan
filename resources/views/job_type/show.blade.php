@extends('layouts.app')

@section('content')
<div class="container">

    <h1>job_type {{ $job_type->id }}
        <a href="{{ url('job_type/' . $job_type->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit job_type"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['job_type', $job_type->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete job_type',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $job_type->id }}</td>
                </tr>
                <tr><th> Job Type </th><td> {{ $job_type->job_type }} </td></tr><tr><th> Description </th><td> {{ $job_type->description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
