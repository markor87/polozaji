<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojLicaNastavljaRadTokom2022 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_lica_nastavlja_rad_2022';
    public $timestamps = false;
}
