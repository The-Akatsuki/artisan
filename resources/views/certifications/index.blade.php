@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Certifications <a href="{{ url('/certifications/create') }}" class="btn btn-primary btn-xs" title="Add New certification"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Certification </th><th> Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($certifications as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->certification }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/certifications/' . $item->id) }}" class="btn btn-success btn-xs" title="View certification"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/certifications/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit certification"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/certifications', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete certification" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete certification',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $certifications->render() !!} </div>
    </div>

</div>
@endsection
