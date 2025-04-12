<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tevekenyseg extends Model
{
    /** @use HasFactory<\Database\Factories\TevekenysegFactory> */
    use HasFactory;
    protected $table = 'tevekenysegs';

    protected $fillable = ['kat_id', 'tev_nev', 'allapot'];
    

    public function kategoria()
    {
        return $this->belongsTo(Kategoria::class, 'kat_id');
    }

    public static function getTevekenysegekWithKategoriak()
    {
        return self::with('kategoria')
            ->get()
            ->map(function ($tevekenyseg) {
                $tevekenyseg->katnev = $tevekenyseg->kategoria->katnev;
                return $tevekenyseg;
            });
    }

}
