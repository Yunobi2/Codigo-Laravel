@extends('layout')

@section('title','Servicios')

@section('content')
<tr>
    <td colspan="4">
        <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>
    </td>
<tr>
    <th colspan="4">Listado de Servicios</th>
</tr>
</tr>
    <h2>Servicios</h2>
    <tr>
        @if($servicios)
            @foreach($servicios as $servicio)
                <td colspan="4"><a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a><br>{{ $servicio->descripcion }}</td>
            @endforeach
        @else
            <td>No existe ningún servicio que mostrar</td>
        @endif
        
@endsection


