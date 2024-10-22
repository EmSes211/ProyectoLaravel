@extends('partials.layout')

@section('title','contact')


@section('content')
<hr>
<h1>@lang('Contact')</h1>




<form method="POST" action="">
    <!-- Directiva de blade que me deja enviar el formulario correctamente @csrf genera un token osea un codigo con letras aleatorias, para darle protección  -->
    @csrf
    <!-- Los contenidos del value me guardan los datos lo que había en los campos del formulario para cuando las validaciones fallen OLD, en textarea no lleva VALUE sino que el valor va dentro de las dos etiquetas -->
    <input type="text" name="name" placeholder="Ingrese su nombre" Value="{{old('name')}}"><br>
    <!-- las 2 llaves a los lados me imprimen, se pone llaves y dos signos de explamación para que ejecute el codigo y no que lo imprima en pantalla -->
    {!! $errors->first("name", ":message <br>") !!}
    
    <input type="text" name="email" placeholder="Ingrese su email"Value="{{old('email')}}"><br>
    {!! $errors->first("email", ":message <br>") !!}
    <input type="text"name="subject" placeholder="Ingrese el asunto"Value="{{old('subject')}}"><br>
    {!! $errors->first("subject", ":message <br>") !!}
    <textarea name="content" placeholder="Ingrese el mensaje" >{{old('content')}}</textarea><br>
    {!! $errors->first("content", ":message <br>") !!}
    <button>Enviar</button>
</form>
@endsection