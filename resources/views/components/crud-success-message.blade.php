@if(session()->has('success'))

    <div class="p-2 bg-green-50 border-green-200 text-green-500 mb-4">
        {{session()->get('success')}}
    </div>

@endif
