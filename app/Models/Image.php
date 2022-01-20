<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{// esto nos ayuda a enviar varios datos 
    protected $filable = [
        'path',
    ];

    use HasFactory;

    //Relación polimórfica uno a uno
    //Una imagen le pertenece a un usuario, reporte, pabellon y carcel
    public function imageable()
    {
        return $this->morphTo();
    }
    use HasFactory;
}
