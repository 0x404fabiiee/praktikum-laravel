@extends('layouts.app')

@section('content')
<h1>halaman surat keluar</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>no</th>
            <th>nomor_surat</th>
            <th>tanggal</th>
            <th>pengirim</th>
            <th>perihal</th>
            <th>AKsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>001/FT/X/2026</td>
            <td>13-10-2026</td>
            <td>Fakultas Teknik</td>
            <td>Rapat</td>
            <td><a href="{{ route('surat-keluar.show', 1) }}">Detail</a></td>
        </tr>
    </tbody>
</table>
@endsection