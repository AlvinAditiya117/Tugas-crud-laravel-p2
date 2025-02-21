<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = buku::all(); 
        return view('bukus.index', compact('bukus')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bukus.create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required', 
            'stok' => 'required|integer', 
            'penulis' => 'required', 
            'tahun_terbit' => 'required|integer', 
            'jenis_buku' => 'required', 
        ]);

        buku::create($request->all()); 
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil ditambahkan.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        return view('bukus.show', compact('buku')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        return view('bukus.edit', compact('buku')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'stok' => 'required|integer',
            'penulis' => 'required',
            'tahun_terbit' => 'required|integer',
            'jenis_buku' => 'required',
        ]);

        $buku->update($request->all()); 
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil diupdate.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        $buku->delete();
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil dihapus.'); 
    }
}
