<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojAktivnihVDPoMesecima2022 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_aktivnih_vd_po_mesecima_2022';
    public $timestamps = false;
//config()->set('database.connections.mysql.strict', false);
    protected $fillable = [
        'Јануар',
        'Број активних вд-а'
    ];

   }
