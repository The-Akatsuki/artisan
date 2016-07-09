@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New employee_certification</h1>
    <hr/>

    {!! Form::open(['url' => '/employee_certifications', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
                {!! Form::label('employee_id', 'Employee', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('employee_id', $employees ,null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('certification_id') ? 'has-error' : ''}}">
                {!! Form::label('certification_id', 'Certification', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('certification_id', $certification, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('certification_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('institute') ? 'has-error' : ''}}">
                {!! Form::label('institute', 'Institute', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('institute', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('institute', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('granted_on') ? 'has-error' : ''}}">
                {!! Form::label('granted_on', 'Granted On', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('granted_on', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('granted_on', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valid_upto') ? 'has-error' : ''}}">
                {!! Form::label('valid_upto', 'Valid Upto', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('valid_upto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valid_upto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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