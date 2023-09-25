<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsecnoVremeTrajanjaKonkursaU2022 extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'prosecno_vreme_trajanja_konkursa_u_2022';
    public $timestamps = false;
}
