<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konkursi extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table='konkursi_62';
    public $timestamps = false;

    public function polozaji()
    {
        return $this->belongsTo(Polozaji::class, 'polozaji_id', 'id');
    }

    public function kandidati()
    {
        return $this->hasMany(Kandidati::class, 'konkurs_id')->orderBy('id', 'desc');
    }
}
