<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h2>Sistem Informasi Surat</h2>
        <nav>
            <a href="{{ route('dashboard')}}">dashboard</a>
            <a href="{{ route('surat-masuk.index')}}">Surat Masuk</a>
            <a href="{{ route('surat-keluar.index') }}">Surat Keluar</a>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Sistem Informasi Surat</p>

    </footer>

</body>

</html>