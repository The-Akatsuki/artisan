@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Employee <a href="{{ url('/employee/create') }}" class="btn btn-primary btn-xs" title="Add New employee"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Employee Name </th>
                    <th> Employee Code </th>
                    <th> Company </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($employee as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->employee_name }}</td>
                    <td>{{ $item->employee_code }}</td>
                    <td>@if(count($item->get_company)>0){{ $item->get_company->company_name }}@endif</td>
                    <td>
                        <a href="{{ url('/employee/' . $item->id) }}" class="btn btn-success btn-xs" title="View employee"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/employee/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit employee"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/employee', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete employee" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete employee',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $employee->render() !!} </div>
    </div>

</div>
@endsection
