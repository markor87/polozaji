<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojPonovoPostavljenihTokom2023 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_ponovo_postavljenih_2023';
    public $timestamps = false;
}
