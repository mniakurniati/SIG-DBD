<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tahun;
use App\Models\Kecamatan;
use App\Models\Kelompok;

class TahunController extends Controller
{
    public function index(){
        $tahun = Tahun::all();
        $kecamatans = Kecamatan::all();
        $kelompok = Kelompok::all();
    return view('tampilan', ['tahun'=> $tahun, 'kecamatans'=> $kecamatans, 'kelompok'=>$kelompok]);
    }
}
