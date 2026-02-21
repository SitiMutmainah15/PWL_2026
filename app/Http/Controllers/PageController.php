<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // "Selamat Datang" /
    public function index() {
        return 'Selamat Datang';
    }

    // "Nama dan NIM" about
    public function about() {
        return 'Nama saya Siti Mutmainah,
         NIM 244107020143';
    }

    // Halaman artikel dinamis" articles/{id}
    public function articles($id) {
        return "Halaman Artikel dengan Id {$id}";
    }
}
