<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojLicaPoMesecima extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_lica_po_mesecima';
    public $timestamps = false;

}
