<x-site-layout title="{{$post->title}}">

    <a class="bg-teal-500 mb-4 text-white rounded-full py-1 px-4 text-sm" href="{{route('categories.show', ['id'=>$post->category->id])}}">
        {{$post->category->name}}
    </a>

    <div class="mb-2 font-semibold">
        Written by: <a href = "{{route ('users.show', ['id'=>$post->author->id])}}">{{$post->author->name}}</a>
    </div>
    {{$post->published_at}}
    {{$post->body}}
</x-site-layout>
