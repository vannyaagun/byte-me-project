<?php

namespace App\Http\Controllers;

class RestController extends Controller
{

    public function show_homepage()
    {
        return view('homepage');
    }

    public function show_varian()
    {
        return view('varian');
    }

    public function show_edukasi()
    {
        return view('edukasi');
    }

        public function show_lokasi()
    {
        return view('lokasi');
    }

    public function show_kontak()
    {
        return view('kontak');
    }
}