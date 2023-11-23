<x-site-layout title="ADMIN ZONE - Categories">

    <form action="{{route('admin.categories.store')}}" method="post">

        @csrf

        <input type="text" name="name" placeholder="Category name">

        <button type="submit">Create</button>
    </form>

</x-site-layout>
