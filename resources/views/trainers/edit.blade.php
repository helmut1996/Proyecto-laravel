@extends('layouts.app')


@section('title', 'Trainers Edit')
@section('content')
<div class="container mt-5">
        <form class="form-group" action="/trainers/{{$trainer->slug}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="name" placeholder="nombre" value="{{$trainer->name}} " class="form-control">
        </div>
        <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" >
                </div>
                <div class="form-group">
                        <label for="">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" value="{{$trainer->descripcion}}" id="" >  
                    </div>
        <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
        </form>
        </div>
        
@endsection
