<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('orario_di_partenza', '>', now())->orderBy('orario_di_partenza')->get();
        return view('index', compact('trains'));
    }
}
