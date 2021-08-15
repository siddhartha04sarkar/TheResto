@extends('layout')

@section('content')

    <div>
        <h2>Edit Restaurant</h2>
        <div>
        <form action="/edit" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="inputEmail4" placeholder="Enter Name">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input type="text" name="email" value="{{ $data->email }}" class="form-control" id="inputPassword4" placeholder="Enter Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" value="{{ $data->address }}" class="form-control" id="inputAddress" placeholder="Enter Address">
            </div>
            <button type="submit" class="btn btn-primary">Update Restaurant</button>
            </form>
        </div>
    </div>

@stop