<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojLicaNastavljaRadTokom2023 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_lica_nastavlja_rad_2023';
    public $timestamps = false;
}
