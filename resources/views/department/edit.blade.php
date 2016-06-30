@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit department {{ $department->id }}</h1>

    {!! Form::model($department, [
        'method' => 'PATCH',
        'url' => ['/department', $department->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('department_name') ? 'has-error' : ''}}">
                {!! Form::label('department_name', 'Department Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('department_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('department_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
                {!! Form::label('company_id', 'Company Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('company_id', $companies, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('department_head') ? 'has-error' : ''}}">
                {!! Form::label('department_head', 'Department Head', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('department_head', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('department_head', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('parent_department') ? 'has-error' : ''}}">
                {!! Form::label('parent_department', 'Parent Department', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('parent_department', $departments, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('parent_department', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sequence_order') ? 'has-error' : ''}}">
                {!! Form::label('sequence_order', 'Sequence Order', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('sequence_order', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('sequence_order', '<p class="help-block">:message</p>') !!}
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