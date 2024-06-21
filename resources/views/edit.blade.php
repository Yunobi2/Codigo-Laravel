@extends('layout')

@section('title','Editar Servicio')

@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Editar Servicios</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('servicios.update', $servicio) }}" method="post">
        @csrf @method('PATCH')
        @include('partials.form', ['btnText' => 'Acrtualizar'])
        {{-- <form action="{{ route('servicios.store') }}" method="post">
        @csrf --}}
        {{-- <tr>
            <th>Titulo</th>
            <td><input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"></td>
            {{-- <td><input type="text" name="titulo" value="{{ $errors->first('titulo') }}"></td> 
        </tr>
        <tr>
            <th>Descripcion</th>
            <td><input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}"></td>
            {{-- <td><input type="text" name="descripcion" value="{{ $errors->first('descripcion') }}"></td> 
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Actualziar</button></td>
        </tr> --}}
    </form>
</table>
@endsection
