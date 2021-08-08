<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    public function index() {
        $membres = Membres::all();
        return view('home', compact('membres'));
    }
}
