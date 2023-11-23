<x-site-layout title="List of authors">
    <ul class="grid grid-cols-2 gap-4">
        @foreach($users as $user)
            <li class="block p-2 bg-white rounded-lg">
                <a class="flex justify-between" href="{{route('users.show', ['id'=>$user->id])}}">
                    <h2 class="font-bold text-lg"> {{$user->name}}</h2>
                    <span>{{$user->posts->count()}}</span>
                </a>
            </li>
        @endforeach
    </ul>


</x-site-layout>
