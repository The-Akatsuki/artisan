@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Job_type <a href="{{ url('/job_type/create') }}" class="btn btn-primary btn-xs" title="Add New job_type"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Job Type </th><th> Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($job_type as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->job_type }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/job_type/' . $item->id) }}" class="btn btn-success btn-xs" title="View job_type"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/job_type/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit job_type"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/job_type', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete job_type" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete job_type',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $job_type->render() !!} </div>
    </div>

</div>
@endsection
