<x-site-layout title="Welcome">

    <h2 class="font-bold"> Best posts from our mentors </h2>
    <div class="grid grid-cols-4 gap-4">

        @foreach($feature_mentors as $post)
            <div class="bg-white p-2">
                {{$post->title}}
            </div>
        @endforeach

    </div>

</x-site-layout>
