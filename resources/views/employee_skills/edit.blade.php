@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit employee_skill {{ $employee_skill->id }}</h1>

    {!! Form::model($employee_skill, [
    'method' => 'PATCH',
    'url' => ['/employee_skills', $employee_skill->id],
    'class' => 'form-horizontal'
    ]) !!}

    <div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
        {!! Form::label('employee_id', 'Employee Id', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('employee_id', $employees, null, ['class' => 'col-sm-3 form-control']) !!}
            {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('skills_id') ? 'has-error' : ''}}">
        {!! Form::label('skills_id', 'Skills Id', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('skills_id', $skills, null, ['class' => 'col-sm-3 form-control']) !!}
            {!! $errors->first('skills_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
        {!! Form::label('details', 'Details', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('details', null, ['class' => 'form-control']) !!}
            {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

</div>
@endsection