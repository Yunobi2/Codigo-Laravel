@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')
<tr>
    <td colspan="4">{{ $servicio->titulo }}
        <a href="{{ route('servicios.edit', $servicio) }}">Editar servicio</a>
    </td>
    <td colspan="2">
        <form action="{{ route('servicios.destroy', $servicio) }}" method="post"> 
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </td>
</tr>

<tr>
    <td colspan="4">{{ $servicio->descripcion }}</td>
</tr>

<tr>
    <td colspan="4">{{ $servicio->created_at->diffForHumans() }}</td>
</tr>
@endsection
