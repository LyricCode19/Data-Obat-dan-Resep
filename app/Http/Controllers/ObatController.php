<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('form-step.obat.index', compact('obats'));
    }

    public function create()
    {
        return view('form-step.obat.create');
    }

    public function store(Request $request)
    {
        Obat::create($request->all());
        return redirect()->route('obat.index')->with('success', 'Data obat berhasil disimpan!');
    }

    public function show(Obat $obat)
    {
        return view('form-step.obat.show', compact('obat'));
    }

    public function edit(Obat $obat)
    {
        return view('form-step.obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $obat->update($request->all());
        return redirect()->route('obat.index')->with('success', 'Data obat berhasil diperbarui!');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect()->route('obat.index')->with('success', 'Data obat berhasil dihapus!');
    }
}
