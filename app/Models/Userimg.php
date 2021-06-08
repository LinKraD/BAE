<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userimg extends Model
{
    use HasFactory;

    protected $table = 'user_images';

    protected $fillable = ['nombre', 'formato', 'usuario'];

    public function usuario()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
