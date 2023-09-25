<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojPostavljenihNaPolozaju extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_postavljenih_na_polozaju';
    public $timestamps = false;
}
