<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Jail extends Model
{

    protected $fillable = ['name', 'code', 'type', 'capacity', 'ward_id','description'];
    use HasFactory;
    //Relación uno a uno
    // Una carcel le pertenece a un pabellon
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
    //Relación de muchos a muchos
    //Una carcel puede tener muchos usuarios
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
 //Relación polimorfica de uno a uno
    //Una carce puede tener una imagen 
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
   
   
}
