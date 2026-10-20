<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Surat Masuk</title>
</head>
<body>
    <h1>Halaman Detail Surat Masuk</h1>
@if ($suratShow)


    <p>
        <strong>Nomor Surat</strong>
        {{ $suratShow['nomor_surat'] }}
    </p>
    
    <p>
        <strong>Tanggal</strong>
        {{ $suratShow['tanggal'] }}
    </p>

    <p>
        <strong>Pengirim</strong>
        {{ $suratShow['pengirim'] }}
    </p>

    <p>
        <strong>Perihal</strong>
        {{ $suratShow['perihal'] }}
    </p>
@else
    <p>Hasil Tidak Ditemukan</p>
@endif
    <a href="{{ route('surat-masuk.index') }}">Kembali</a>
</body>
</html> 