@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Employee_certifications <a href="{{ url('/employee_certifications/create') }}" class="btn btn-primary btn-xs" title="Add New employee_certification"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Employee Id </th><th> Certification Id </th><th> Institute </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($employee_certifications as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                   <td>{{ $item->get_employee->employee_name }}</td>
                    <td>{{ $item->get_certification->certification }}</td>
                    <td>{{ $item->institute }}</td>
                    <td>
                        <a href="{{ url('/employee_certifications/' . $item->id) }}" class="btn btn-success btn-xs" title="View employee_certification"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/employee_certifications/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit employee_certification"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/employee_certifications', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete employee_certification" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete employee_certification',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $employee_certifications->render() !!} </div>
    </div>

</div>
@endsection
