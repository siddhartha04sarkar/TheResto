@extends('layout')

@section('content')

    <div>
        <h2>List of Restaurant's</h2>
        @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
        <div>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->address }}</td>
            <td>
                <a href="delete/{{ $item->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a> | 
                <a href="edit/{{ $item->id }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>   
        </div>
    </div>

@stop