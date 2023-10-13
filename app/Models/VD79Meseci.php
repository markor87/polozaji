<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VD79Meseci extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'vd_7_9_meseci';
    public $timestamps = false;

}
