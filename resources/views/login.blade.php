@extends('layout')

@section('content')

    <div>
        <h3>User Registration</h3>
        <div>
        <form action="login" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
            </div>
          
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

@stop