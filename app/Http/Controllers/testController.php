<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{
    //
    public function getAdd()
    {

        $tahun_awal_bgt = 1990;
        
        $tahun_skr_bgt = date('Y');

        return view('test')->with(['tahun_awal_bgt' => $tahun_awal_bgt])->with(['tahun_skr_bgt' => $tahun_skr_bgt]);
    }
}
