<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'judul' => 'Beranda',
            'versi' => 'PT. Maslakone Aplikasi Digital'
        ]);
    }
}
