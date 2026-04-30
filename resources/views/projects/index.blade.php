@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the projects list page --}}
    {{-- Should display all projects in a Tailwind grid; each card links to the show page --}}
    {{-- TODO Day 5: replace hardcoded data with real DB data passed from the controller --}}
    {{-- TODO Day 9: use @can('update', $project) to conditionally show edit/delete buttons --}}

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Projects</h1>

    @php
        $projects = [
            ['id' => 1, 'title' => 'Website Redesign'],
            ['id' => 2, 'title' => 'Mobile App'],
            ['id' => 3, 'title' => 'AI Project']
        ];
    @endphp

    <ul>
        @foreach($projects as $project)
            <li class="mb-2">
                <a href="/projects/{{ $project['id'] }}" class="text-blue-500">
                    {{ $project['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
