<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class SifarnikOrgani extends Model
{
    use HasFactory;
    protected $table = 'sifarnik_organi';
}
