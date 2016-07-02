@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit pay_grade {{ $pay_grade->id }}</h1>

    {!! Form::model($pay_grade, [
        'method' => 'PATCH',
        'url' => ['/pay_grade', $pay_grade->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('pay_grade') ? 'has-error' : ''}}">
                {!! Form::label('pay_grade', 'Pay Grade', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pay_grade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pay_grade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('currency') ? 'has-error' : ''}}">
                {!! Form::label('currency', 'Currency', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('currency', $currency, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('currency', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('min_salary') ? 'has-error' : ''}}">
                {!! Form::label('min_salary', 'Min Salary', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('min_salary', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('min_salary', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('max_salary') ? 'has-error' : ''}}">
                {!! Form::label('max_salary', 'Max Salary', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('max_salary', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('max_salary', '<p class="help-block">:message</p>') !!}
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