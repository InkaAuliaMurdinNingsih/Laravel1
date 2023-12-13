<?php

namespace App\Http\Controllers;

use App\Models\aulia;
use Illuminate\Http\Request;

class umkmController extends Controller
{
    public function umkm(){
        $data = aulia::all();
        return view('UMKM.index', compact('data'));
    }

    public function baca($id)
    {
        $data= aulia::find($id);
        return view('baca.bacauk', compact('data'));

    }
}
