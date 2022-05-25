@extends('layouts.principal')

@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <h1>catalogo de productos</h1>
    </div>
    @foreach($productos as $productos)
    <div class="row">
    <div class="col s5">
      <div class="card">
        <div class="card-image">
          <img src="{{asset ('img/'.$productos->imagen)}}" class="center"width="300">
          <span class="card-title">{{$productos->nombre}}</span>
        </div>
        <div class="card-content">
          <li>Descripccion: {{$productos->descripccion}}</li>
          <li>Precio: {{$productos->precio}}</li>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
    @endforeach
    
</body>
</html>

@endsection