<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaganController extends Controller
{
    //
    public $sports = [
        ["nama" => "futsal", "gambar" => "football.png"],
        ["nama" => "volley", "gambar" => "volleyball.png"],
        ["nama" => "basket", "gambar" => "basket.png"],
        ["nama" => "badminton", "gambar" => "badminton.png"],
        ["nama" => "mlbb", "gambar" => "ml.png"],
        ["nama" => "catur", "gambar" => "chess.png"]
    ];
                       
    public function index()
    {
        $tur = $this->sports;

        return view('guest.bracket.index',compact('tur'));
    }

    public function detail(String $nama)
    {
        $lomba = $nama;
        $tur = $this->sports;
        return view('guest.bracket.detail',compact('tur','lomba'));
    }
}
