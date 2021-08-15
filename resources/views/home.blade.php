@extends('layout')

@section('content')
        @if(Session::get('userMsg'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('userMsg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
    <div>
        <h3>The Restro</h3>
        <h4>This is a restaurent app</h4>
    </div>

@stop