@extends('layouts.app')
@section('title', 'Edit Surat Masuk')
@section('content')
<h1>Edit Surat Masuk</h1>
<form method="POST" action="{{ route('surat-masuk.update', $surat->id) }}">
    @csrf
    @method('PUT')
    @include('surat-masuk._form')
    <button type="submit">Perbarui</button>
    <a href="{{ route('surat-masuk.index') }}">Batal</a>
</form>
@endsection