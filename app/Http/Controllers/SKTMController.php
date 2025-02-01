<?php

namespace App\Http\Controllers;

use App\Models\SKTM;
use Illuminate\Http\Request;

class SKTMController extends Controller
{
    public function index()
    {
        $sktms = SKTM::all();
        return view('sktm.index', compact('sktms'));
    }

    public function create()
    {
        return view('sktm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required',
            'nik' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'dusun' => 'required',
            'desa' => 'required',
        ]);

        SKTM::create($request->all());

        return redirect()->route('sktm.index')->with('success', 'Data SKTM berhasil ditambahkan.');
    }

    public function edit(SKTM $sktm)
    {
        return view('sktm.edit', compact('sktm'));
    }

    public function update(Request $request, SKTM $sktm)
    {
        $request->validate([
            'no' => 'required',
            'nik' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'dusun' => 'required',
            'desa' => 'required',
        ]);

        $sktm->update($request->all());

        return redirect()->route('sktm.index')->with('success', 'Data SKTM berhasil diperbarui.');
    }

    public function destroy(SKTM $sktm)
    {
        $sktm->delete();

        return redirect()->route('sktm.index')->with('success', 'Data SKTM berhasil dihapus.');
    }
}
