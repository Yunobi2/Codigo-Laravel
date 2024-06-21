@extends('layout')

@section('title','Create Servicio')

@section('content')
<table cellpadding="3" cellspaceing="5">
<tr>
    <th colspan="4">Crear nuevo servicio</th>
</tr> 

@include('partials.validation-errors')
<form action="{{ route('servicios.store') }}" method="post">
@include('partials.form', ['btnText' => 'Guardar'])
{{-- <tr>
    <th>Titulo</th>
    <td><input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"></td>
</tr>
<tr>
    <th>Descripcion</th>
    <td><input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}"></td>
</tr>
<tr>
    <td colspan="2" align="center"><button>Guardar</button></td>
</tr> --}}
</form>
</table>
@endsection