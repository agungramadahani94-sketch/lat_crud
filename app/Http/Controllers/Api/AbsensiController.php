<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return response()->json(Absensi::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
            'kelas' => 'required',
            'status' => 'required|in:absen,alpa,sakit',
        ]);

        $absensi = Absensi::create($data);

        return response()->json($absensi, 201);
    }

    public function show(Absensi $absensi)
    {
        return response()->json($absensi);
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

        return response()->json($absensi);
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}