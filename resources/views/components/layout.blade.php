<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 text-black">
    <header class="bg-slate-800 p-8">
        <nav>
            <a href="#" class="nav-link">Home</a>
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </div>
        </nav>
    </header>
    <main class="py-8 px-4 mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>
</body>

</html>
