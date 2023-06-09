<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'video',
        'imagen',
        'servicio_id',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
