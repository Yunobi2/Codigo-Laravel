<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@extends('layout')
@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')
@auth
<tr>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/storage/{{$servicio->image}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
          @if($servicio->category_id)
          <a href="#" class="badge badge-secondary">{{ $servicio->category->name }}</a>
          @endif
        </div>
      </div>
    {{-- <td><img src="/storage/{{$servicio->image}}" alt="{{$servicio->titulo}}" width="100" height="50"></td> --}}
    <td colspan="4">{{ $servicio->titulo }}
        <a href="
        {{ route('servicios.edit', $servicio) }}">Editar servicio</a>
    </td>
    <td colspan="2">
        <form action="{{ route('servicios.destroy', $servicio) }}" method="post"> 
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </td>
</tr>
@endauth

<tr>
    <td colspan="4">{{ $servicio->descripcion }}</td>
</tr>

<tr>
    <td colspan="4">{{ $servicio->created_at->diffForHumans() }}</td>
</tr>
@endsection
