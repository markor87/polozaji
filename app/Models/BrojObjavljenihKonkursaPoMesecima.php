<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojObjavljenihKonkursaPoMesecima extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_objavljenih_konkursa_po_mesecima';
    public $timestamps = false;
    protected $fillable =
        [
            'godina',
            'mesec_u_godini',
            'broj_konkursa',
            'mesec'
        ];
}

