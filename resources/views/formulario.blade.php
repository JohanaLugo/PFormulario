@extends('templates.master')

@section ('header')
<h2>Formulario.</h2>
@stop

@section ('nav')
hasdg
@stop

@section ('barra')
<h2>Cajas registradoras</h2>
<p>Es un aparato mecánico o electrónico que permite calcular y registrar transacciones comerciales, e incluye un cajón para guardar dinero.</p>
@stop

@section ('contenido')
<form action="{{route('calculaarea')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inbase" class="form-label">Base</label>
        <input type="text" class="form-control" name="inbase" id="inbase">
    </div>
    <div class="mb-3">
        <label for="inaltura" class="form-label">Altura</label>
        <input type="text" class="form-control" name="inaltura" id="inaltura">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

@section ('footer')
<h5 align = "Center">Página Creada por Johana Camila Lugo Sánchez 5 - F</h5>
@stop