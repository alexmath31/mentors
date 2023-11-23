<x-site-layout title="ADMIN ZONE - Categories">

    <a class="underline pb-4" href="{{route('admin.categories.create')}}"> Create a category </a>

    <ul>
        @foreach($categories as $category)
            <li>

                {{$category->name}} -  <a class="underline" href="{{route('admin.categories.edit', $category)}}"> edit </a>
                <a class="underline" href="{{route('admin.categories.show', $category)}}"> show </a>
            </li>
        @endforeach
    </ul>
</x-site-layout>
