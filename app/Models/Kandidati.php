<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidati extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table='kandidati_62';
    public $timestamps = false;

    public function konkursi()
    {
        return $this->belongsTo(Konkursi::class, 'konkurs_id', 'id');
    }
}
