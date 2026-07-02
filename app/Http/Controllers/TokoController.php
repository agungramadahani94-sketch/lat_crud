<?php

namespace App\Http\Controllers;

use App\Models\toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toko = toko::all();

        return view('toko.index', compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('toko.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_barang' => 'required',
            'qty' => 'required|integer',
            'kategori' => 'required',
            'keterangan' => 'required',

        ]);

        toko::create($data);

        return redirect()->route('toko.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(toko $toko)
    {
        return view('toko.edit', compact('toko'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, toko $toko)
    {
        $data = $request->validate([
            'nama_barang' => 'required',
            'qty' => 'required|integer',
            'kategori' => 'required',
            'keterangan' => 'required',

        ]);

        $toko->update($data);

        return redirect()->route('toko.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(toko $toko)
    {
        $toko->delete();
        return redirect()->route('toko.index')->with('success', 'Data berhasil dihapus');
    }
}
