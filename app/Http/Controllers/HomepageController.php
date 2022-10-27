<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index () {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about()
    {
        $data = array('title' => 'tentang kami');
        return view('homepage.about', $data);
    }

    public function kontak()
    {
        $data = array('title' => 'kontak kami');
        return view('homepage.kontak', $data);
    }
    public function kategori()
    {
        $data = array('title' => 'kategori produk');
        return view('homepage.kategori', $data);
    }

    public function kategoriproduk()
    {
        $data = array('title' => 'kategori produk');
        return view('homepage.kategoriproduk', $data);
    }
    
}
