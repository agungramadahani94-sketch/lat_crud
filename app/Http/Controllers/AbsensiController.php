<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        return view('absensi.index', compact('absensi'));
    }

    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
            'kelas' => 'required',
            'status' => 'required|in:absen,alpa,sakit',
        ]);

        Absensi::create($data);

        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Absensi $absensi)
    {
        return view('absensi.edit', compact('absensi'));
    }

    public function update(Request $request, Absensi $absensi)
    {
        $data = $request->validate([
            'nama' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
            'kelas' => 'required',
            'status' => 'required|in:absen,alpa,sakit',
        ]);

        $absensi->update($data);

        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();

        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dihapus');
    }
}