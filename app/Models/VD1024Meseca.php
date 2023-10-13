<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VD1024Meseca extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'vd_10_24_meseca';
    public $timestamps = false;

}
