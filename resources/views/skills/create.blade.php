@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New skill</h1>
    <hr/>

    {!! Form::open(['url' => '/skills', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('skill_name') ? 'has-error' : ''}}">
                {!! Form::label('skill_name', 'Skill Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('skill_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('skill_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
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