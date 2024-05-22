<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $brg = barang::all(); //eloquent ORM
        return view('barang.index',compact('nomor','brg'));
    }

    public function create()
    {
        return view('barang.form');
    }

    public function store(Request $request)
    {
        $brg = new barang;
        $brg->kode_barang = $request->kode_barang;
        $brg->nama_barang = $request->nama_barang;
        $brg->harga = $request->harga;
        $brg->save();

        return redirect('/barang/');
    }
}
