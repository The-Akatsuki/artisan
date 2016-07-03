@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit qualification {{ $qualification->id }}</h1>

    {!! Form::model($qualification, [
        'method' => 'PATCH',
        'url' => ['/qualifications', $qualification->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('qualification') ? 'has-error' : ''}}">
                {!! Form::label('qualification', 'Qualification', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('qualification', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('qualification', '<p class="help-block">:message</p>') !!}
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