@extends('templates.master')

@section ('header')
<h2>Inicio de sesión</h2>
@stop

@section ('nav')

@stop

@section ('barra')
<h2>Log In</h2>
<p>En el ámbito de seguridad informática, log in o log on es el proceso que controla el acceso individual a un sistema informático mediante la identificación del usuario utilizando credenciales provistas por el usuario.​</p>
@stop

@section ('contenido')
<form action="{{route('iniciosesion')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="correo" class="form-label">Correo Electrónico:</label>
        <input type="text" class="form-control" name="correo" id="correo">
    </div>
    <div class="mb-3">
        <label for="contra" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contra" id="contra">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

@section ('footer')
<h5 align = "Center">Página Creada por Johana Camila Lugo Sánchez 5 - F</h5>
@stop