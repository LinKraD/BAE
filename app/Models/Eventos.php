<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';
    protected $primaryKey = 'id';
    //protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['id', 'titulo', 'cuerpo', 'usuario', 'fecha_publicacion'];

    public function creadores()
    {
        return $this->belongsTo(Users::class, "usuario", "id");
    }
}
