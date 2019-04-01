@extends('layouts.app')


@section('title', 'Trainers')
@section('content')

<div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm">
                <div class="card text-center my-5" style="width: 18rem;">
                    <img class="card-img-top rounded-circle image mx-auto d-block" src="/imagenes/{{$trainer->avatar}}" alt="">
                        <div class="card-body">
                        <h5 class="card-title">{{$trainer->name}}</h5>
                        <p class="card-text">{{$trainer->descripcion}}</p>
                        <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
     
        </div>
    @endforeach
        
    

</div>
@endsection