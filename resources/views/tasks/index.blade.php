@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the tasks list page --}}
    {{-- Should display all tasks for the current project, grouped or filtered by status --}}
    {{-- TODO Day 5: replace hardcoded data with real DB data passed from the controller --}}
    {{-- TODO Day 9: use @can('update', $task) to conditionally show edit/delete buttons --}}
<div class="p-6">
    <h1 class="text-xl font-bold">Tasks</h1>

    @php
        $tasks = [
            ['title' => 'Learn Blade', 'completed' => true],
            ['title' => 'Build UI', 'completed' => false],
        ];
    @endphp

    @foreach($tasks as $task)
        <div>
            @if($task['completed'])
                ✅
            @else
                ❌
            @endif
            {{ $task['title'] }}
        </div>
    @endforeach
</div>
@endsection