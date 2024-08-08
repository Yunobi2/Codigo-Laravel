 @extends('layout')

 @section('title','Servicios')
 
 @section('content')
 <h2>Servicios</h2>
 
 <tr>
    @isset($category)
        <div>
            <h1 class="display-4 mb-0" style="font-size: 2rem;">{{ $category->name }}</h1>
            <a href="{{ route('servicios.index') }}">Regresar a servicios</a>
        </div>
    @endisset
     @auth
     <td colspan="4">
         <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>
     </td>
     @endauth
 </tr>
 
 <tr>
     <th colspan="4">Listado de Servicios</th>
 </tr>
 
 <tr>
     @if($servicios)
         @foreach($servicios as $servicio)
         <tr>
             <td>
                 @if($servicio->image)
                     <img src="/storage/{{$servicio->image}}" alt="{{$servicio->titulo}}" width="150" height="150">
                 @endif
             </td>
             <td colspan="4">
                 <a href="{{ route('servicios.show',$servicio) }}">{{ $servicio->titulo }}</a><br>
                 {{ $servicio->descripcion }}<br>
                 @if($servicio->category_id)
                     <a href="{{ route('categories.show', $servicio->category) }}" class="badge badge-secondary">{{ $servicio->category->name }}</a>
                 @endif
             </td>
         </tr>
         @endforeach
     @else
         <td>No existe ningún servicio que mostrar</td>
     @endif
 </tr>
 
 @endsection
 