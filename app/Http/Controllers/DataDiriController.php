<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiri;

class DataDiriController extends Controller
{

    public function show()
    {
        return view('data-diri');
    }


public function store(Request $request)
{
    $validated = $request->validate([
        'sudah_vaksin' => 'required',
        'tanggal_vaksin' => 'nullable|date',
        'jenis_vaksin' => 'nullable|string',
        'gejala_serius' => 'nullable|string',
        'pernah_covid' => 'required',
        'gejala_ispa' => 'required',
        'hipertensi' => 'required',
        'penyakit_kronis' => 'nullable|string',
    ]);

    DataDiri::create($validated);

    return redirect()->route('JadwalVaksin')->with('success', 'Data berhasil disimpan!');
}
}