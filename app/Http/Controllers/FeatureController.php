<?php

namespace App\Http\Controllers;

use App\Models\Features; 
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Features::all();
        return view('features', ['features' => $features]);
    }
}
