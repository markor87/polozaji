<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojZavrsenihKonkursaU2023 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_zavrsenih_konkursa_u_2023_godini';
    public $timestamps = false;
}
