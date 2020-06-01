<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;
use App\Brand;

class HomeController extends Controller
{
    public function index() {
        $title = 'Pagrindinis';
        $trucks = Truck::all();
        return view('trucks.home', compact('title', 'trucks'));
    }
}
