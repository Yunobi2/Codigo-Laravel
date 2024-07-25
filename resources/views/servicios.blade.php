@extends('layout')

@section('title','Servicios')

@section('content')
<h2>Servicios</h2>
<tr>
    @auth
    <td colspan="4">
        <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>
    </td>
    @endauth
<tr>
    <th colspan="4">Listado de Servicios</th>
</tr>
</tr>
    <tr>
        @if($servicios)
            @foreach($servicios as $servicio)
            <tr>
                <td>
                    @if($servicio->image)
                        <img src="/storage/{{$servicio->image}}" alt="{{$servicio->titulo}}" width="50"
                        height="50">
                    @endif
                </td>
            </tr>
                <td colspan="4"><a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a><br>{{ $servicio->descripcion }}</td>
            @endforeach
        @else
            <td>No existe ningún servicio que mostrar</td>
        @endif
        
@endsection


