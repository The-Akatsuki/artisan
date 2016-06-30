@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New employee</h1>
    <hr/>

    {!! Form::open(['url' => '/employee', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('employee_name') ? 'has-error' : ''}}">
                {!! Form::label('employee_name', 'Employee Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('employee_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('employee_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('employee_code') ? 'has-error' : ''}}">
                {!! Form::label('employee_code', 'Employee Code', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('employee_code', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('employee_code', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
                {!! Form::label('company_id', 'Company Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('company_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('department_id') ? 'has-error' : ''}}">
                {!! Form::label('department_id', 'Department Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('department_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nationality') ? 'has-error' : ''}}">
                {!! Form::label('nationality', 'Nationality', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('nationality', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nationality', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : ''}}">
                {!! Form::label('date_of_birth', 'Date Of Birth', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date_of_birth', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                {!! Form::label('gender', 'Gender', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('marital_status') ? 'has-error' : ''}}">
                {!! Form::label('marital_status', 'Marital Status', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('marital_status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('marital_status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mobile_number') ? 'has-error' : ''}}">
                {!! Form::label('mobile_number', 'Mobile Number', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('mobile_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mobile_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('landline') ? 'has-error' : ''}}">
                {!! Form::label('landline', 'Landline', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('landline', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('landline', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                {!! Form::label('address', 'Address', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
                {!! Form::label('city', 'City', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('city', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                {!! Form::label('state', 'State', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('state', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                {!! Form::label('country', 'Country', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('country', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pincode') ? 'has-error' : ''}}">
                {!! Form::label('pincode', 'Pincode', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('pincode', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pincode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('employment_type') ? 'has-error' : ''}}">
                {!! Form::label('employment_type', 'Employment Type', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('employment_type', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('employment_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('job_title') ? 'has-error' : ''}}">
                {!! Form::label('job_title', 'Job Title', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('job_title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('job_title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pay_grade') ? 'has-error' : ''}}">
                {!! Form::label('pay_grade', 'Pay Grade', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('pay_grade', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pay_grade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('joining_date') ? 'has-error' : ''}}">
                {!! Form::label('joining_date', 'Joining Date', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('joining_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('joining_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('termination_date') ? 'has-error' : ''}}">
                {!! Form::label('termination_date', 'Termination Date', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('termination_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('termination_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('supevisor') ? 'has-error' : ''}}">
                {!! Form::label('supevisor', 'Supevisor', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('supevisor', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('supevisor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('notes') ? 'has-error' : ''}}">
                {!! Form::label('notes', 'Notes', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('notes', '<p class="help-block">:message</p>') !!}
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