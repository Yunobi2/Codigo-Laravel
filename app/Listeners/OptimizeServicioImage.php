<?php

namespace App\Listeners;

use App\Events\ServicioSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizeServicioImage Implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(ServicioSaved $event): void
    {
        $servicio = $event->servicio;

        if ($servicio->image) {
            $image = Image::make(Storage::get($servicio->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put($servicio->image, (string) $image);
        }
    }
}