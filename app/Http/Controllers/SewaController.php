<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SewaController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $Sewa = Sewa::with('penyewaan')->get()->map(function ($item) {
            return [
                
            ];
        });

        return view('kendaraan.index', compact('kendaraan'));
    }
}
