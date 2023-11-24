<x-site-layout title="{{$category->name}}">
    <ul class="list-dist ml-4">

        @foreach($category->posts as $post)
            <li>
                <a class="underline" href="{{route('posts.show', ['post'=>$post])}}">
                    {{$post->title}}
                </a>
            </li>

        @endforeach

    </ul>
</x-site-layout>
