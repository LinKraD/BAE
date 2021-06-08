<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    protected $table = 'imagenes';
    protected $primaryKey = 'id';
    //protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['id', 'titulo', 'autor', 'descripcion', 'ruta', 'nombre'];

    public function creadores()
    {
        return $this->belongsTo(Users::class, "autor", "id");
    }
}
