<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        return "ok ini latihan controller";
    }

    public function beranda ()
    {
        $data = array('nama' => 'alya');
        return view('beranda', $data);
    }
}
