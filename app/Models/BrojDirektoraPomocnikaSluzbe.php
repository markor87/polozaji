<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrojDirektoraPomocnikaSluzbe extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'broj_direktora_pomocnika_sluzbe';
    public $timestamps = false;

    protected $fillable = [
        'vrsta_organa',
        'polozaj',
        'broj',
        'status'
    ];
}

