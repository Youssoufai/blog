    <x-layout>
        <h1 class="title">Latest Post</h1>
        <div class="grid grid-cols-2 gap-6">
            @foreach ($posts as $post)
                <div class="bg-slate-700">

                    <div class="card p-8 shadow-lg shadow-slate-600 m-4 text-white">
                        {{-- Title --}}
                        <h2> {{ $post->title }} </h2>
                        {{-- Author and Date --}}
                        <div class="text-xs font-light mb-4">
                            <span>Posted {{ $post->created_at->diffForHumans() }} by</span>
                            <a href="" class="text-blue-500 font-medium">USERNAME</a>
                        </div>

                        {{-- Body --}}

                        <div class="text-sm">
                            <p> {{ Str::words($post->body, 15) }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </x-layout>
