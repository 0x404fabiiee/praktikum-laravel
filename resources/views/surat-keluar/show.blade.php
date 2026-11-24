@extends('layouts.app')
@section('title', 'Detail Surat Keluar')
@section('content')
<div class="max-w-2xl bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold mb-4">Detail Surat Keluar</h1>
    <dl class="divide-y divide-slate-100">
        <div class="py-3 grid grid-cols-3 gap-4"><dt class="font-medium text-slate-500">Nomor</dt><dd class="col-span-2">{{ $surat->nomor_surat }}</dd></div>
        <div class="py-3 grid grid-cols-3 gap-4"><dt class="font-medium text-slate-500">Tanggal</dt><dd class="col-span-2">{{ $surat->tanggal }}</dd></div>
        <div class="py-3 grid grid-cols-3 gap-4"><dt class="font-medium text-slate-500">Tujuan</dt><dd class="col-span-2">{{ $surat->tujuan }}</dd></div>
        <div class="py-3 grid grid-cols-3 gap-4"><dt class="font-medium text-slate-500">Perihal</dt><dd class="col-span-2">{{ $surat->perihal }}</dd></div>
        <div class="py-3 grid grid-cols-3 gap-4"><dt class="font-medium text-slate-500">Keterangan</dt><dd class="col-span-2">{{ $surat->keterangan ?? '-' }}</dd></div>
    </dl>
    <a href="{{ route('surat-keluar.index') }}" class="mt-6 inline-block rounded-md bg-slate-200 px-4 py-2 text-slate-700 hover:bg-slate-300">Kembali ke daftar</a>
</div>
@endsection