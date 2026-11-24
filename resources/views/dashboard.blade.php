@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="bg-white rounded-lg shadow p-8">
    <h1 class="text-3xl font-bold text-slate-800">Dashboard</h1>
    <p class="mt-2 text-slate-600">Selamat datang di Sistem Informasi Surat.</p>

    <div class="mt-8 grid gap-4 sm:grid-cols-2">
        <a href="{{ route('surat-masuk.index') }}"
           class="block rounded-lg border border-indigo-200 bg-indigo-50 p-6 hover:bg-indigo-100">
            <h2 class="text-lg font-semibold text-indigo-700">Surat Masuk</h2>
            <p class="mt-1 text-sm text-slate-600">Lihat dan kelola surat yang diterima.</p>
        </a>
        <a href="{{ route('surat-keluar.index') }}"
           class="block rounded-lg border border-emerald-200 bg-emerald-50 p-6 hover:bg-emerald-100">
            <h2 class="text-lg font-semibold text-emerald-700">Surat Keluar</h2>
            <p class="mt-1 text-sm text-slate-600">Lihat dan kelola surat yang dikirim.</p>
        </a>
    </div>
</div>
@endsection