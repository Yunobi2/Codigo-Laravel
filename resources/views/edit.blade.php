@extends('layout')

@section('title','Editar Servicio')

@section('content')
<table cellpadding="3" cellspaceing="5">
    @auth
    <tr>
        <img src="/storage/{{$servicio->image}}" alt="{{$servicio->titulo}}" width="200" height="100">
        <th colspan="4">Editar Servicios</th>
    </tr>
    @endauth
    
    @include('partials.validation-errors')
    <form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
        @csrf @method('PATCH')
        @include('partials.form', ['btnText' => 'Acrtualizar'])
    </form>
</table>
@endsection
