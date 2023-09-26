<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojRaspisanihKonkursaU2023 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_raspisanih_konkursa_u_toku_2023';
    public $timestamps = false;
}
