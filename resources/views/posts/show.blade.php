<x-site-layout title="{{$post->title}}">

    <img src="{{$post->media->first()->getUrl('preview')}}" alt="{{$post->title}}" class="mb-4">

    @foreach($post->categories as $category)
        <a class="bg-teal-500 mb-4 text-white rounded-full py-1 px-4 text-sm" href="{{route('categories.show', ['id'=>$category->id])}}">
            {{$category->name}}
        </a>
    @endforeach

    <div class="mb-2 font-semibold">
        Written by: <a href = "{{route ('users.show', ['id'=>$post->author->id])}}">{{$post->author->name}}</a>
    </div>

        <span>{{$post->published_at}}</span>
    <div>{{$post->content}}</div>

</x-site-layout>
