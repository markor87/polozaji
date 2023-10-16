<?php

namespace App\Http\Controllers;

use App\Models\Konkursi;
use Illuminate\Http\Request;

class KonkursiController extends Controller
{
    public function index()
    {
        $konkursi = Konkursi::with('polozaji', 'kandidati')->paginate(10);
        return view('konkursi', ['konkursi' => $konkursi]);
    }
}
