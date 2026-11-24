@extends('layouts.app')
@section('title', 'Edit Surat Masuk')
@section('content')
<div class="max-w-2xl bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Surat Masuk</h1>
    <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium text-slate-700">Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('nomor_surat') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal) }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('tanggal') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Pengirim</label>
            <input name="pengirim" value="{{ old('pengirim', $surat->pengirim) }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('pengirim') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Perihal</label>
            <input name="perihal" value="{{ old('perihal', $surat->perihal) }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            @error('perihal') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Keterangan</label>
            <textarea name="keterangan" rows="3"
                      class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">{{ old('keterangan', $surat->keterangan) }}</textarea>
            @error('keterangan') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Kategori</label>
            <select name="category_id"
                    class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                <option value="">-- Tanpa kategori --</option>
                @foreach ($categories as $kategori)
                    <option value="{{ $kategori->id }}" @selected(old('category_id', $surat->category_id) == $kategori->id)>
                        {{ $kategori->nama }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Lampiran (PDF/JPG/PNG, maks. 2 MB)</label>
            @if ($surat->lampiran)
                <p class="text-sm text-slate-500">Lampiran saat ini:
                    <a href="{{ asset('storage/' . $surat->lampiran) }}" target="_blank" rel="noopener" class="text-indigo-600 hover:underline">Lihat lampiran</a>
                    (pilih file baru untuk menggantinya)
                </p>
            @endif
            <input type="file" name="lampiran" accept=".pdf,.jpg,.jpeg,.png"
                   class="mt-1 w-full text-sm text-slate-600 file:mr-3 file:rounded-md file:border-0 file:bg-indigo-50 file:px-4 file:py-2 file:text-indigo-700 hover:file:bg-indigo-100">
            @error('lampiran') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div class="flex items-center gap-3">
            <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 font-semibold text-white hover:bg-indigo-700">Simpan Perubahan</button>
            <a href="{{ route('surat-masuk.index') }}" class="text-slate-600 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection