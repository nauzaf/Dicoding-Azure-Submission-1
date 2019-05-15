<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = Pengguna::all();
        return view('main', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $pengguna = new Pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->email = $request->email;
        $pengguna->pekerjaan = $request->pekerjaan;
        $pengguna->save();
        return redirect()->route('main');
    }
}
