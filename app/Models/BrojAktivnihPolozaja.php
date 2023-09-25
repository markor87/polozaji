<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojAktivnihPolozaja extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_aktivnih_polozaja';
    public $timestamps = false;
}
