<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsecnoVremeTrajanjaKonkursaUToku extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'prosecno_vreme_trajanja_konkursa_u_toku';
    public $timestamps = false;
}
