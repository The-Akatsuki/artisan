@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Company_information <a href="{{ url('/company_information/create') }}" class="btn btn-primary btn-xs" title="Add New company_information"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Company Name </th><th> Registration No </th><th> Company Type </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($company_information as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->company_name }}</td><td>{{ $item->registration_no }}</td><td>{{ $item->company_type }}</td>
                    <td>
                        <a href="{{ url('/company_information/' . $item->id) }}" class="btn btn-success btn-xs" title="View company_information"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/company_information/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit company_information"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/company_information', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete company_information" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete company_information',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $company_information->render() !!} </div>
    </div>

</div>
@endsection
