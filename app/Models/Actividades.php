<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $table = 'actividades';
    protected $primaryKey = 'id';
    //protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['id', 'titulo', 'cuerpo', 'usuario', 'fecha_publicacion'];

    public function creadores()
    {
        return $this->belongsTo(User::class, "usuario", "id");
    }
}
