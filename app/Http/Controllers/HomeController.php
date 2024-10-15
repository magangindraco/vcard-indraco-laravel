<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method untuk menampilkan halaman utama
    public function welcome()
    {
        return view('welcome'); // Ganti dengan nama view yang Anda gunakan
    }
}
