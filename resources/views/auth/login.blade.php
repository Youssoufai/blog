<x-layout>
    <h1>Welcome Back</h1>
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="input" value="{{ old('username') }}">
                @error('username')
                    <p>{{ $message }}</p>
                @enderror
            </div>
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
            {{-- Submit --}}
            <button class="btn">Register</button>
        </form>
    </div>
</x-layout>
