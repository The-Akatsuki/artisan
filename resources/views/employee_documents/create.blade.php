@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New employee_document</h1>
    <hr/>

    {!! Form::open(['url' => '/employee_documents', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
                {!! Form::label('employee_id', 'Employee Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('employee_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('document_name') ? 'has-error' : ''}}">
                {!! Form::label('document_name', 'Document Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('document_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('document_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('document_location') ? 'has-error' : ''}}">
                {!! Form::label('document_location', 'Document Location', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('document_location', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('document_location', '<p class="help-block">:message</p>') !!}
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