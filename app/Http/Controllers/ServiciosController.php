<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function index(){
        $servicios = Servicio::get();
        $servicios = Servicio::orderBy('titulo', 'asc')->get();
        return view('servicios', compact('servicios'));
        // return view('servicios',[
        //     'servicios' => Servicio::with('category')->latest()->paginate()
        // ]);
    }
    public function show($id){
        return view('show',[
            'servicio' => Servicio::find($id)
        ]);
    }

    public function create(){
        return view('create', [
            'servicio' => new Servicio,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function store(CreateServicioRequest $request){
        
        // Servicio::create($request->validated());
        $servicio = new Servicio($request->validated());
        $servicio->image= $request->file('image')->store('images',);
        $servicio->save();

        $image = Image::make(storage::get($servicio->image))
            ->widen(600)
            ->limitColors(255)
            ->encode();

        Storage::put($servicio->image, (string) $image);

        return redirect()->route('servicios.index')->with('estado','El servicio fue creado correctamente');
    }

    public function edit(Servicio $servicio)
    {
        return view('edit', [
            'servicio' => $servicio,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function update(Servicio $servicio, CreateServicioRequest $request){

        if($request->hasFile('image')){
            Storage::delete($servicio->image);
           $servicio->fill($request->validated());
           $servicio->image = $request->file('image')->store('images');
           $servicio->save();

           $image = Image::make(storage::get($servicio->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

           Storage::put($servicio->image, (string) $image);

        } else {
            $servicio->update(array_filter($request->validated()));
        }

        return redirect()->route('servicios.show',$servicio)->with('estado','El servicio fue actualizado correctamente');
    }

    public function destroy(Servicio $servicio){
        
        Storage::delete($servicio->image);
        $servicio->delete();
        
        return redirect()->route('servicios.index')->with('estado','El servicio fue eliminado correctamente');
    }
    
    public function __construct(){
        $this->middleware('auth')->except('index','show');

    }
}


