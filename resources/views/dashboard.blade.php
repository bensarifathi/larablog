<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                {{ session('success') }}
            @endif
            
            @foreach ($posts as $post)
                <div class="flex item-center">
                    <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 px-2 py-3 block">Editer le post</a>
                    <a href="#" class="bg-red-500 px-2 py-3 block" onclick="event.preventDefault;
                    document.getElementById('destroy-post-form-{{$post->id}}').submit();
                    ">Supprimer le post
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" id="destroy-post-form-{{$post->id}}">
                            @csrf
                            @method('delete')
                        </form>    
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
