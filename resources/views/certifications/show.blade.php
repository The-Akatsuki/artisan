@extends('layouts.app')

@section('content')
<div class="container">

    <h1>certification {{ $certification->id }}
        <a href="{{ url('certifications/' . $certification->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit certification"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['certifications', $certification->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete certification',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $certification->id }}</td>
                </tr>
                <tr><th> Certification </th><td> {{ $certification->certification }} </td></tr><tr><th> Description </th><td> {{ $certification->description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
