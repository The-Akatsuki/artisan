@extends('layouts.app')

@section('content')
<div class="container">

    <h1>job_title {{ $job_title->id }}
        <a href="{{ url('job_title/' . $job_title->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit job_title"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['job_title', $job_title->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete job_title',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $job_title->id }}</td>
                </tr>
                <tr><th> Job Title </th><td> {{ $job_title->job_title }} </td></tr><tr><th> Description </th><td> {{ $job_title->description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
