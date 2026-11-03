@extends('layouts.app')
@section('title', 'Tambah Surat Masuk')
@section('content')
<h1>Tambah Surat Masuk</h1>
<form method="POST" action="{{ route('surat-masuk.store') }}">
    @csrf
    @include('surat-masuk._form')
    <button type="submit">Simpan</button>
    <a href="{{ route('surat-masuk.index') }}">Batal</a>
</form>
@endsection