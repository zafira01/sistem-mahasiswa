<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->get();

        return view('mahasiswa', compact('mahasiswas'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:50|unique:mahasiswas,npm',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
        ]);

        Mahasiswa::create($data);

        return redirect('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil disimpan!');
    }
}