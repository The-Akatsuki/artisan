@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Qualifications <a href="{{ url('/qualifications/create') }}" class="btn btn-primary btn-xs" title="Add New qualification"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Qualification </th><th> Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($qualifications as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->qualification }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/qualifications/' . $item->id) }}" class="btn btn-success btn-xs" title="View qualification"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/qualifications/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit qualification"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/qualifications', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete qualification" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete qualification',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $qualifications->render() !!} </div>
    </div>

</div>
@endsection
