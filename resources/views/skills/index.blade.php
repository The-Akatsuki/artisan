@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Skills <a href="{{ url('/skills/create') }}" class="btn btn-primary btn-xs" title="Add New skill"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Skill Name </th><th> Description </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($skills as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->skill_name }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/skills/' . $item->id) }}" class="btn btn-success btn-xs" title="View skill"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/skills/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit skill"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/skills', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete skill" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete skill',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $skills->render() !!} </div>
    </div>

</div>
@endsection
