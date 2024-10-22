@extends('partials.layout')

@section('title','Editar producto')



@section('content')
<h1>Nuevo producto</h1>

<form action="{{ route('productos.update', $producto )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Nombre:</label><br>
    <input type="text" name="nombre" placeholder="Ingrese nombre" value="{{ $producto->nombre }}"><br><br>
    <label for="">Descripcion.</label><br>
    <input type="text" name="descripcion" placeholder="Ingrese descripcion" value="{{ $producto->descripcion }}"><br><br>
    <label for="">Imagen actual</label><br>
    <img src="{{ asset('imagen/' . $producto->imagen) }}" alt="" width="200px" height="150px"><br><br>
    <label for="">Imagen nueva</label><br>
    <input type="file" name="imagen"><br><br>
    <button type="submit">Actualizar Producto</button>
</form>
@endsection