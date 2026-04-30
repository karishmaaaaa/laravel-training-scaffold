@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the new-project form layout --}}
    {{-- TODO Day 5: wire POST action and old() helper for repopulation --}}
    {{-- TODO Day 7: add @error directives to display validation errors --}}

<div class="p-6">
    <h1 class="text-xl font-bold mb-4">Create Project</h1>

    <form>
        <input type="text" placeholder="Project Name" class="border p-2 mb-2 w-full">
        <button class="bg-blue-500 text-white px-4 py-2">Create</button>
    </form>
</div>
@endsection