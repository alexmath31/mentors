<x-site-layout title="ADMIN ZONE - Categories">

    <a class="underline" href="{{route ('admin.categories.index')}}"> Return to index </a>

    <p class="font-bold">{{$category->name}}</p>

    <a class="underline" href="{{route ('admin.categories.edit', $category)}}"> Edit </a>

    <form action="{{route ('admin.categories.destroy', $category)}}" method="POST">

        @csrf
        @method('DELETE')
        <button class="underline"> Delete </button>

    </form>

</x-site-layout>
