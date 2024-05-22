<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index');
    }

    public function create()
    {
        return view('barang.form');
    }
}
