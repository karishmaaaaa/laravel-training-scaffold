@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the project detail page --}}
    {{-- TODO Day 5: pass $project from the controller and display its fields --}}
    {{-- TODO Day 6: list nested $project->tasks with their $task->comments --}}

<div class="p-6">
    @php
        $project = [
            'id' => 1,
            'title' => 'Website Redesign',
            'tasks' => [
                ['title' => 'Design UI', 'completed' => true],
                ['title' => 'Build Backend', 'completed' => false],
            ]
        ];
    @endphp

    <h1 class="text-2xl font-bold">{{ $project['title'] }}</h1>

    <h2 class="mt-4 font-semibold">Tasks:</h2>

    <ul>
        @foreach($project['tasks'] as $task)
            <li>
                @if($task['completed'])
                    ✅
                @else
                    ❌
                @endif
                {{ $task['title'] }}
            </li>
        @endforeach
    </ul>
</div>
@endsection