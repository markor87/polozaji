<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojAktivnihVDPoMesecima2023 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_aktivnih_vd_po_mesecima_2023';
    public $timestamps = false;

    protected $fillable = [
        'Јануар',
        'Број активних вд-а'
    ];
}

