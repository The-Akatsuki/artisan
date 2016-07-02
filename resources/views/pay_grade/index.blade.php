@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Pay_grade <a href="{{ url('/pay_grade/create') }}" class="btn btn-primary btn-xs" title="Add New pay_grade"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Pay Grade </th><th> Currency </th><th> Min Salary </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($pay_grade as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->pay_grade }}</td>
                    <td>@if(count($item->get_currency)>0){{ $item->get_currency->currency }} @endif</td>
                    <td>{{ $item->min_salary }}</td>
                    <td>
                        <a href="{{ url('/pay_grade/' . $item->id) }}" class="btn btn-success btn-xs" title="View pay_grade"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/pay_grade/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pay_grade"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/pay_grade', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete pay_grade" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete pay_grade',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $pay_grade->render() !!} </div>
    </div>

</div>
@endsection
