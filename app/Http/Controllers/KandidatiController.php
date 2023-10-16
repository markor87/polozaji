<?php

namespace App\Http\Controllers;

use App\Models\Kandidati;
use Illuminate\Http\Request;

class KandidatiController extends Controller
{
    public function index()
    {
        $kandidati = Kandidati::paginate(10);
        return view('kandidati', ['kandidati' => $kandidati]);
    }
}
