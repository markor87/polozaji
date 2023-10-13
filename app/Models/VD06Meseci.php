<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VD06Meseci extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'vd_0_6_meseci';
    public $timestamps = false;

}
