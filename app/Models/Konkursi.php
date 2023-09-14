<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konkursi extends Model
{
    use HasFactory;
    protected $table='konkursi_62';

    public function polozaj()
    {
        return $this->belongsTo(Polozaji::class, 'id');
    }
}
