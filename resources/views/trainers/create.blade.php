@extends('layouts.app')


@section('title', 'Trainers Create')
@section('content')
<div class="container mt-5">
        @if($errors->any() )

        <div class="alert alert-danger">
                <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                           
                </ul>
        </div>
        @endif
        <form class="form-group" action="/trainers" method="post" enctype="multipart/form-data">
            @csrf
        @include('trainers.forms')
        </form>
        </div>
        
@endsection
