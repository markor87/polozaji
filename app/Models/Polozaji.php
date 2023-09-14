<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polozaji extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'polozaji';

    public function sifarnikVrstaOrgana()
    {
        return $this->belongsTo(SifarnikVrstaOrgana::class, 'vrsta_organa_id', 'id');
    }

    public function sifarnikOrgani()
    {
        return $this->belongsTo(SifarnikOrgani::class, 'organ_id', 'id');
    }

    public function sifarnikSektori()
    {
        return $this->belongsTo(SifarnikSektori::class, 'sektor_id', 'id');
    }

    public function sifarnikPolozaj()
    {
        return $this->belongsTo(SifarnikPolozaj::class, 'polozaj_id', 'id');
    }

    public function sifarnikStatusPolozaja()
    {
        return $this->belongsTo(SifarnikStatusPolozaja::class, 'status', 'id');
    }

    }
