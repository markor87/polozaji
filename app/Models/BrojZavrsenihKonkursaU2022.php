<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojZavrsenihKonkursaU2022 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_zavrsenih_konkursa_u_2022_godini';
    public $timestamps = false;
}
