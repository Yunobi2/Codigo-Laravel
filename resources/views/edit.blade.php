@extends('layout')

@section('title','Editar Servicio')

@section('content')
<table cellpadding="3" cellspaceing="5">
    @auth
    <tr>
        <th colspan="4">Editar Servicios</th>
    </tr>
    @endauth
    
    @include('partials.validation-errors')
    <form action="{{ route('servicios.update', $servicio) }}" method="post">
        @csrf @method('PATCH')
        @include('partials.form', ['btnText' => 'Acrtualizar'])
    </form>
</table>
@endsection
