<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$post->title}}
        </h2>

        <img src="{{asset('/storage/'. $post->image)}}" alt="{{$post->title}}">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>{{$post->content}}</div>
            
        </div>
    </x-slot>


</x-app-layout>