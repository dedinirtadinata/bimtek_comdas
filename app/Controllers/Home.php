<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('beranda_dukungan');
    }

    public function dukungan() : string
    {
        return view('beranda_dukungan');
    }

    public function tentang() : string
    {
        // return view('beranda_dukungan');
        return "ini adalah halaman tentang";
    }

    public function katalog() : string
    {
        // return view('beranda_dukungan');
    }

    public function hitung($a, $b) : int
    {
        return $a+$b;
    }
}
