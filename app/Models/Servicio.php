<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'user_id',
        'imagen'
    ];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
