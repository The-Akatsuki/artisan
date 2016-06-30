@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit job_type {{ $job_type->id }}</h1>

    {!! Form::model($job_type, [
        'method' => 'PATCH',
        'url' => ['/job_type', $job_type->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('job_type') ? 'has-error' : ''}}">
                {!! Form::label('job_type', 'Job Type', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('job_type', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('job_type', '<p class="help-block">:message</p>') !!}
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