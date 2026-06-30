<?php

namespace App\Http\Controllers;

use App\Models\perpus;
use Illuminate\Http\Request;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perpus = perpus::all();

        return view('perpus.index', compact('perpus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perpus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'judul_buku' => 'required',
            'qty' => 'required|integer',
        ]);

        perpus::create($data);

        return redirect()->route('perpus.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(perpus $perpu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(perpus $perpu)
    {
        return view('perpus.edit', compact('perpu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, perpus $perpu)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'judul_buku' => 'required',
            'qty' => 'required|integer',
        ]);

        $perpu->update($data);

        return redirect()->route('perpus.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(perpus $perpu)
    {
        $perpu->delete;
        return redirect()->route('perpus.index')->with('success', 'Data berhasil dihapus');
    }
}
