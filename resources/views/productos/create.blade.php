@extends('partials.layout')

@section('title','Crear producto')



@section('content')
<h1>Nuevo producto</h1>

<form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Nombre:</label><br>
    <input type="text" name="nombre" placeholder="Ingrese nombre" value="{{old('nombre')}}"><br><br>
    <label for="">Descripcion.</label><br>
    <input type="text" name="descripcion" placeholder="Ingrese descripcion" value="{{old('descripcion')}}"><br><br>
    <label for="">Imagen</label><br>
    <input type="file" name="imagen"><br><br>
    <button type="submit">Guardar Producto</button>
</form>
@endsection