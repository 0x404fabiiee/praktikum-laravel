<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SIM-Surat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-500 text-slate-800 flex flex-col">
    <header class="bg-indigo-900 text-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between gap-3">
            <h2 class="text-xl font-bold">Sistem Informasi Surat</h2>

            <nav class="flex flex-wrap items-center gap-2 text-sm">
                <a href="{{ route('dashboard') }}"
                   class="px-3 py-2 rounded-md hover:bg-indigo-600 {{ request()->routeIs('dashboard') ? 'bg-indigo-900' : '' }}">Dashboard</a>
                <a href="{{ route('surat-masuk.index') }}"
                   class="px-3 py-2 rounded-md hover:bg-indigo-600 {{ request()->routeIs('surat-masuk.*') ? 'bg-indigo-900' : '' }}">Surat Masuk</a>
                <a href="{{ route('surat-keluar.index') }}"
                   class="px-3 py-2 rounded-md hover:bg-indigo-600 {{ request()->routeIs('surat-keluar.*') ? 'bg-indigo-900' : '' }}">Surat Keluar</a>

                @auth
                    <span class="ml-2 text-indigo-200">Masuk sebagai: {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="px-3 py-2 rounded-md bg-red-500 hover:bg-red-600 text-white">Keluar</button>
                    </form>
                @endauth
            </nav>
        </div>
    </header>

    <main class="flex-1 max-w-6xl w-full mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-slate-200">
        <p class="max-w-6xl mx-auto px-4 py-4 text-center text-sm text-slate-500">Sistem Informasi Surat</p>
    </footer>
</body>

</html>