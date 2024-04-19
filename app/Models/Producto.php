<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class);
    }
    public function Supermercadoproducto()
    {
        return $this->hasMany(Supermercadoproducto::class);
    }

    public function Noticia()
    {
        return $this->hasMany(Noticia::class);
    }
}

