<?php

namespace App\Http\Controllers;
use App\Travel;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index() {
        $title = "Le mie prenotazioni";
        $travels = Travel::all();
        return view('home', compact('title', 'travels'));
    }
}
