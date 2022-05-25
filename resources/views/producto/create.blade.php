@extends('layouts.principal')

@section('contenido')
<h1 class="">Nuevo Producto</h1>
<div class="row">
    <form method
    ="POST" action="{{route('producto.store')}}"class="col s12" enctype="multipart/form-data">
      @csrf
      @if(session('mensaje'))
      <div class="row">
        <div class="col-s8">
          <span class="validate" class="teal-text text-accent-3">
            {{session('mensaje')}}
          </spam>
        </div>
      </div>    
      @endif
      <div class="row">
        <div class="input-field col s8">
          <input id="nombre" name="nombre" type="text" class="validate">
          <label for="nombre">Nombre de producto</label>
          <span>{{ $errors->first('nombre')}}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
          <label for="desc">Descripcion  </label>
          <span>{{ $errors->first('desc')}}</span>       
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="number" class="validate" name="precio">
          <label for="precio">Precio</label>
          <span>{{ $errors->first('precio')}}</span>
        </div>
      </div>
      
         elije categorias
    
            <div class="row">
            <div class="input-field col s6">
    <select name="categoria">
      <option value="" disabled selected>Elija una categoria</option>
      @foreach($categoria as $categorias)
      <option value="{{ $categorias->id}}">{{$categorias->nombre}}</option>
      @endforeach
      <label>Materialize Select</label>
      <span>{{ $errors->first('categoria')}}</span>
      </select>
      <select name="marca">
      <option value="" disabled selected>Elija una Marca</option>
      @foreach($marca as $marcas)
      <option value="{{ $categorias->id}}">{{$marcas->nombre}}</option>
      @endforeach
    </select>
    <label>Materialize Select</label>
    <span>{{ $errors->first('marca')}}</span>
    </div>
      <div class="row">
          <div class="file-field input-field col s8" >
            <div class="btn">
              <span>Imagen de Producto...</span>
              <input type="file" name="imagen" >
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
        </div>
      </div>
            </div>
            <div class="row">
            <button class="btn waves-effect waves-light" type="Summit" name="action">Guardar
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
  
  @endsection()