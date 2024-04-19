<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supermercado extends Model
{
    use HasFactory;
    public function Supermercadoproducto()
    {
        return $this->hasMany(Supermercadoproducto::class);
    }

}
