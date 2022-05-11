@extends('layouts.principal')

@section('contenido')
<h1 class="">Nuevo Producto</h1>
<div class="row">
    <form method="POST" action="{{route('producto.store')}}"class="col s12">
      @csrf
      <div class="row">
        <div class="input-field col s8">
          <input id="nombre" name="nombre" type="text" class="validate">
          <label for="nombre">Nompre de producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
          <label for="desc">Descripcion  </label>         
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="number" class="validate" name="precio">
          <label for="precio">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagen de producto</span>
              <input type="file" name="imagen">
            </div>         
          </div>
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
      </select>
      <select name="marca">
      <option value="" disabled selected>Elija una Marca</option>
      @foreach($marca as $marcas)
      <option value="{{ $categorias->id}}">{{$marcas->nombre}}</option>
      @endforeach
    </select>
    <label>Materialize Select</label>
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
