<x-layout>
    <h1>Welcome Back</h1>
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="input" value="{{ old('email') }}">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="text" name="password" class="input">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="remember">Remember me</label>
                <input type="checkbox" name="remember" id="remember">
            </div>
            @error('failed')
                <p>{{ $message }}</p>
            @enderror
            {{-- Submit --}}
            <button class="btn">Login</button>
        </form>
    </div>
</x-layout>
