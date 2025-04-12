<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;
    protected $table = 'kategorias';

    protected $fillable = ['katnev'];
    
    public function tevekenysegek()
    {
        return $this->hasMany(Tevekenyseg::class, 'kat_id');
    }
}
