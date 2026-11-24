@extends('layouts.app')
@section('title', 'Daftar Surat Masuk')
@section('content')
<div class="flex flex-wrap items-center justify-between gap-3 mb-4">
    <h1 class="text-2xl font-bold">Daftar Surat Masuk</h1>
    @can('manage-letters')
        <a href="{{ route('surat-masuk.create') }}"
           class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">+ Tambah Surat</a>
    @endcan
</div>

@if (session('success'))
    <div class="mb-4 rounded-md border border-green-300 bg-green-100 px-4 py-3 text-green-800">{{ session('success') }}</div>
@endif

<form method="GET" action="{{ route('surat-masuk.index') }}"
      class="mb-4 flex flex-wrap items-center gap-2 bg-white rounded-lg shadow p-4">
    <input type="text" name="q" value="{{ request('q') }}" placeholder="Nomor, pengirim, atau perihal"
           class="flex-1 min-w-[200px] rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
    <select name="category_id"
            class="rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        <option value="">Semua kategori</option>
        @foreach ($categories as $kategori)
            <option value="{{ $kategori->id }}" @selected(request('category_id') == $kategori->id)>
                {{ $kategori->nama }}
            </option>
        @endforeach
    </select>
    <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Cari / Filter</button>
    <a href="{{ route('surat-masuk.index') }}" class="text-sm text-slate-600 hover:underline">Reset</a>
</form>

<div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-left text-slate-600">
            <tr>
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Nomor</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Pengirim</th>
                <th class="px-4 py-3">Perihal</th>
                <th class="px-4 py-3">Kategori</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
        @forelse ($suratMasuk as $surat)
            <tr class="hover:bg-slate-50">
                <td class="px-4 py-3">{{ $suratMasuk->firstItem() + $loop->index }}</td>
                <td class="px-4 py-3">{{ $surat->nomor_surat }}</td>
                <td class="px-4 py-3">{{ $surat->tanggal }}</td>
                <td class="px-4 py-3">{{ $surat->pengirim }}</td>
                <td class="px-4 py-3">{{ $surat->perihal }}</td>
                <td class="px-4 py-3">{{ $surat->category?->nama ?? 'Tanpa kategori' }}</td>
                <td class="px-4 py-3">
                    <div class="flex flex-wrap items-center gap-2">
                        <a href="{{ route('surat-masuk.show', $surat->id) }}"
                           class="rounded bg-sky-100 px-3 py-1 text-sky-700 hover:bg-sky-200">Detail</a>
                        @can('manage-letters')
                            <a href="{{ route('surat-masuk.edit', $surat->id) }}"
                               class="rounded bg-amber-100 px-3 py-1 text-amber-700 hover:bg-amber-200">Edit</a>
                            <form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Hapus surat ini?')"
                                        class="rounded bg-red-100 px-3 py-1 text-red-700 hover:bg-red-200">Hapus</button>
                            </form>
                        @endcan
                    </div>
                </td>
            </tr>
        @empty
            <tr><td colspan="7" class="px-4 py-6 text-center text-slate-500">Belum ada surat masuk.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4 flex items-center justify-center gap-4 text-sm text-slate-600">
    @if ($suratMasuk->previousPageUrl())
        <a href="{{ $suratMasuk->previousPageUrl() }}"
           class="rounded bg-white px-3 py-1 shadow hover:bg-slate-100">Sebelumnya</a>
    @endif
    <span>Halaman {{ $suratMasuk->currentPage() }} dari {{ $suratMasuk->lastPage() }}</span>
    @if ($suratMasuk->nextPageUrl())
        <a href="{{ $suratMasuk->nextPageUrl() }}"
           class="rounded bg-white px-3 py-1 shadow hover:bg-slate-100">Berikutnya</a>
    @endif
</div>
@endsection