<?php

namespace App\Http\Controllers;

use App\Models\keseharian;
use Illuminate\Http\Request;

class KeseharianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keseharian = keseharian::all();
        return view('keseharian.index', compact('keseharian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('keseharian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'kegiatan' => 'required',
            'status' => 'required',

        ]);

        keseharian::create($data);
        return redirect()->route('keseharian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(keseharian $keseharian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(keseharian $keseharian)
    {
         return view('keseharian.edit', compact('keseharian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, keseharian $keseharian)
    {
        $data = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'kegiatan' => 'required',
            'status' => 'required',

        ]);

        $keseharian->update($data);
        return redirect()->route('keseharian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(keseharian $keseharian)
    {
        $keseharian->delete();
        return redirect()->route('keseharian.index')
                 ->with('success', 'Data berhasil dihapus');
    }
}
