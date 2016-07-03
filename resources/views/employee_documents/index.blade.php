@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Employee_documents <a href="{{ url('/employee_documents/create') }}" class="btn btn-primary btn-xs" title="Add New employee_document"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Employee Id </th><th> Document Name </th><th> Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($employee_documents as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->employee_id }}</td><td>{{ $item->document_name }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/employee_documents/' . $item->id) }}" class="btn btn-success btn-xs" title="View employee_document"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/employee_documents/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit employee_document"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/employee_documents', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete employee_document" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete employee_document',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $employee_documents->render() !!} </div>
    </div>

</div>
@endsection
