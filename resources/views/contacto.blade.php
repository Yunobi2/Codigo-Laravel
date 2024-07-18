@extends('layout')

@section('title','Contacto')

@section('content')
    <tr>
        <td colspan="4">
            <table class="contact-table">
                <thead>
                    <tr>
                        <th colspan="2">CONTACTO</th>
                    </tr>
                </thead>
                @if(@session('estado'))
                    {{session('estado')}}
                @else 
                <form action="{{ route('contacto')}}" method="post">
                    @csrf 
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td>
                                <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                                {{ $errors->first('nombre') }}
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                {{ $errors->first('email') }}
                            </td>
                        </tr>
                        <tr>
                            <td>Asunto</td>
                            <td>
                                <input type="text" name="asunto" placeholder="Asunto" value="{{ old('asunto') }}">
                                {{ $errors->first('asunto') }}
                            </td>
                        </tr>
                        <tr>
                            <td>Mensaje</td>
                            <td>
                                <textarea name="mensaje" placeholder="Mensaje" rows="4" value="{{ old('mensaje') }}"></textarea>
                                {{ $errors->first('mensaje') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="button-row">
                                <button class="color" type="submit">Enviar</button>
                                <button class="color" type="reset">Cancelar</button>
                            </td>
                        </tr>
                    </tbody>
                </form>                    
                @endif
            </table>
        </td>
    </tr>
@endsection