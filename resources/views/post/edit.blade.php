<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer {{$post->title}}
        </h2>
    </x-slot>

    <div class="overflow-x-hidden bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-5">
                @foreach ($errors->all() as $error)
                    <span class="block text-red-500">{{$error}}</span>
                @endforeach
            </div>
            <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <x-input-label for='title' value='Titre du post' />
                <x-text-input id="title" name="title" value="{{$post->title}}" />

                <x-input-label for='content' value='Contenue du post' />
                <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>

                <x-input-label for='image' value='Image du post' />
                <x-text-input id="image" type="file" name="image" />

                <x-input-label for='category' value='Category du post' />
                <select name="category" id="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected': ''}} >{{$category->name}}</option>
                    @endforeach
                </select>
                <button class="bg-gray-500" type="submit" style="display: block !important">Modifier mon post</button>
            </form>
        </div>
    </div>

</x-app-layout>