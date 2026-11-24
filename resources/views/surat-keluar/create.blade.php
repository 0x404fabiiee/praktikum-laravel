@extends('layouts.app')
@section('title', 'Tambah Surat Keluar')
@section('content')
<div class="max-w-2xl bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Surat Keluar</h1>
    <form action="{{ route('surat-keluar.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-slate-700">Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat') }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
            @error('nomor_surat') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
            @error('tanggal') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Tujuan</label>
            <input name="tujuan" value="{{ old('tujuan') }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
            @error('tujuan') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Perihal</label>
            <input name="perihal" value="{{ old('perihal') }}"
                   class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
            @error('perihal') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Keterangan</label>
            <textarea name="keterangan" rows="3"
                      class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">{{ old('keterangan') }}</textarea>
            @error('keterangan') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>
        <div class="flex items-center gap-3">
            <button type="submit" class="rounded-md bg-emerald-600 px-4 py-2 font-semibold text-white hover:bg-emerald-700">Simpan</button>
            <a href="{{ route('surat-keluar.index') }}" class="text-slate-600 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection