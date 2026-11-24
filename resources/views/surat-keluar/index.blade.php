@extends('layouts.app')
@section('title', 'Daftar Surat Keluar')
@section('content')
<div class="flex flex-wrap items-center justify-between gap-3 mb-4">
    <h1 class="text-2xl font-bold">Daftar Surat Keluar</h1>
    @can('manage-letters')
        <a href="{{ route('surat-keluar.create') }}"
           class="rounded-md bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">+ Tambah Surat</a>
    @endcan
</div>

@if (session('success'))
    <div class="mb-4 rounded-md border border-green-300 bg-green-100 px-4 py-3 text-green-800">{{ session('success') }}</div>
@endif

<div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-left text-slate-600">
            <tr>
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Nomor</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Tujuan</th>
                <th class="px-4 py-3">Perihal</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
        @forelse ($suratKeluar as $surat)
            <tr class="hover:bg-slate-50">
                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                <td class="px-4 py-3">{{ $surat->nomor_surat }}</td>
                <td class="px-4 py-3">{{ $surat->tanggal }}</td>
                <td class="px-4 py-3">{{ $surat->tujuan }}</td>
                <td class="px-4 py-3">{{ $surat->perihal }}</td>
                <td class="px-4 py-3">
                    <div class="flex flex-wrap items-center gap-2">
                        <a href="{{ route('surat-keluar.show', $surat->id) }}"
                           class="rounded bg-sky-100 px-3 py-1 text-sky-700 hover:bg-sky-200">Detail</a>
                        @can('manage-letters')
                            <a href="{{ route('surat-keluar.edit', $surat->id) }}"
                               class="rounded bg-amber-100 px-3 py-1 text-amber-700 hover:bg-amber-200">Edit</a>
                            <form action="{{ route('surat-keluar.destroy', $surat->id) }}" method="POST" class="inline">
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
            <tr><td colspan="6" class="px-4 py-6 text-center text-slate-500">Belum ada surat keluar.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection