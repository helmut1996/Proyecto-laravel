@extends('layouts.app')


@section('title', 'Trainers')
@section('content')

<div class="container text-center my-5">
        <img src="/imagenes/{{$trainer->avatar}}" class="card-img-top rounded-circle image mx-auto d-block forma" alt="">
        <h1>{{$trainer->name}}</h1>
        <p class="">{{$trainer->descripcion}}</p>

        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
        
    <form class="form-group mt-3" method="POST" action="/trainers/{{$trainer->slug}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
        
        
        
</div>

@endsection