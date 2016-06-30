@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Job_title <a href="{{ url('/job_title/create') }}" class="btn btn-primary btn-xs" title="Add New job_title"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Job Title </th><th> Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($job_title as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->job_title }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/job_title/' . $item->id) }}" class="btn btn-success btn-xs" title="View job_title"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/job_title/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit job_title"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/job_title', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete job_title" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete job_title',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $job_title->render() !!} </div>
    </div>

</div>
@endsection
