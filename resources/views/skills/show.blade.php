@extends('layouts.app')

@section('content')
<div class="container">

    <h1>skill {{ $skill->id }}
        <a href="{{ url('skills/' . $skill->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit skill"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['skills', $skill->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete skill',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $skill->id }}</td>
                </tr>
                <tr><th> Skill Name </th><td> {{ $skill->skill_name }} </td></tr><tr><th> Description </th><td> {{ $skill->description }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
