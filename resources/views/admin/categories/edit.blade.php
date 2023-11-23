<x-site-layout title="ADMIN ZONE - Categories - edit">

    <form action="{{route('admin.categories.update', $category->id)}}" method="post">

        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{$category->name}}" placeholder="Category name">

        <button type="submit">Update</button>
    </form>

</x-site-layout>
