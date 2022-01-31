<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Image extends Model

{
 // enviar varios datos masivos
 protected $fillable =[
     'path',
 ];

    use HasFactory;



    // Relación polimórfica uno a uno
    // Una imagen le pertenece a un usuario, reporte, pabellón y cárcel.

    public function imageable()
    {
        return $this->morphTo();
    }

//Importante pues si no esta la  ruta http puede que guarde su nombre
    public function getUrl(): string
    {
        return Str::startsWith($this->path, 'https://')
            ? $this->path
            : Storage::url($this->path);
    }


}