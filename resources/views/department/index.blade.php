@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Department <a href="{{ url('/department/create') }}" class="btn btn-primary btn-xs" title="Add New department"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Department Name </th><th> Description </th><th> Company </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($department as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->department_name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>@if(count($item->get_company)>0){{ $item->get_company->company_name }} @endif</td>
                    <td>
                        <a href="{{ url('/department/' . $item->id) }}" class="btn btn-success btn-xs" title="View department">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                        </a>
                        <a href="{{ url('/department/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit department"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/department', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete department" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete department',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $department->render() !!} </div>
    </div>

</div>
@endsection
