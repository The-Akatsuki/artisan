@extends('layouts.app')

@section('content')
<div class="container">

    <h1>pay_grade {{ $pay_grade->id }}
        <a href="{{ url('pay_grade/' . $pay_grade->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pay_grade"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['pay_grade', $pay_grade->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete pay_grade',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $pay_grade->id }}</td>
                </tr>
                <tr><th> Pay Grade </th><td> {{ $pay_grade->pay_grade }} </td></tr><tr><th> Currency </th><td> {{ $pay_grade->currency }} </td></tr><tr><th> Min Salary </th><td> {{ $pay_grade->min_salary }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
