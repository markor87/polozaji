<?php

namespace App\Http\Controllers;

use App\Models\Polozaji;
use Illuminate\Http\Request;

class PolozajiController extends Controller
{
    public function index()
    {
        $polozaji = Polozaji::with('sifarnikVrstaOrgana', 'sifarnikOrgani', 'sifarnikSektori', 'sifarnikPolozaj', 'sifarnikStatusPolozaja', 'konkursi')->paginate(10);
        return view('polozaji', ['polozaji' => $polozaji]);
    }
}
