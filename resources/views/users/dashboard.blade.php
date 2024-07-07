<x-layout>
    <h1 class="title">Hello {{ auth()->user()->username }}</h1>
    {{-- Create Post Form  --}}
    <div class="mb-4 card">
        <h2 class="font-bold mb-4">Create a new post</h2>

        {{-- Session Messages --}}
        @if (session('success'))
            <div class="mb-2">
                <x-flashMsg msg="{{ session('success') }}" />
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            {{-- Title --}}
            <div class="mb-4">
                <label for="title">Post Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="input @error('title')
                    
                @enderror ring-red-500">
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="body">Post Body</label>
                <textarea name="body" cols="30" rows="5">
                    {{ old('body') }}
                </textarea>
                @error('body')
                    <p>{{ $message }}</p>
                @enderror
                <button class="btn">Create</button>
            </div>
        </form>
    </div>
    {{-- User Posts  --}}
    <h2 class="font-bold mb-4">Your Latest Posts</h2>
    @foreach ($posts as $post)
        <x-postCard :post="$post">

        </x-postCard>
    @endforeach
    <div>
        {{ $posts->links() }}
    </div>
</x-layout>
