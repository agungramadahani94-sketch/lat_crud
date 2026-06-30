<?php

namespace App\Http\Controllers;

use App\Models\sipalkom;
use Illuminate\Http\Request;

class SipalkomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sipalkom = sipalkom::all();

       return view('sipalkom.index', compact('sipalkom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sipalkom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'nama_barang' => 'required',
            'kondisi' => 'required',
            'qty' => 'required|integer',
            'tgl_peminjaman' => 'required',
            'tgl_kembali' => 'required',
        ]);

        sipalkom::create($data);

        return redirect()->route('sipalkom.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(sipalkom $sipalkom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sipalkom $sipalkom)
    {
        return view('sipalkom.edit', compact('sipalkom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sipalkom $sipalkom)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'nama_barang' => 'required',
            'kondisi' => 'required',
            'qty' => 'required|integer',
            'tgl_peminjaman' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $sipalkom->update($data);

        return redirect()->route('sipalkom.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sipalkom $sipalkom)
    {
        $sipalkom->delete();
        return redirect()->route('sipalkom.index')->with('success', 'Data berhasil dihapus');
    }
}
