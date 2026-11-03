<?php

namespace App\Http\Controllers;

use App\Models\IncomingLetter;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = IncomingLetter::all();
        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show($id)
    {
        $surat = IncomingLetter::findOrFail($id);
        return view('surat-masuk.show', compact('surat'));
    }

    public function create()
    {
        return view('surat-masuk.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nomor_surat' => ['required', 'string', 'max:255'],
            'tanggal'     => ['required', 'date'],
            'pengirim'    => ['required', 'string', 'max:255'],
            'perihal'     => ['required', 'string', 'max:255'],
            'keterangan'  => ['nullable', 'string'],
        ]);

        IncomingLetter::create($data);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat masuk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $surat = IncomingLetter::findOrFail($id);
        return view('surat-masuk.edit', compact('surat'));
    }

    public function update(Request $request, $id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $data = $request->validate([
            'nomor_surat' => ['required', 'string', 'max:255'],
            'tanggal'     => ['required', 'date'],
            'pengirim'    => ['required', 'string', 'max:255'],
            'perihal'     => ['required', 'string', 'max:255'],
            'keterangan'  => ['nullable', 'string'],
        ]);

        $surat->update($data);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat masuk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $surat = IncomingLetter::findOrFail($id);
        $surat->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat masuk berhasil dihapus.');
    }
}