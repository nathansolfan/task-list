{{-- Using isset only display this div if $name is available --}}
@extends('layout.app')

@section('content')
    {{-- @if ( count($tasks) ) --}}

    @forelse ( $tasks as $task )
    <div>
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{$task->title}}</a>
    </div>
    @empty
    <div>
        There are no tasks
    </div>
     @endforelse ($tasks as $task )

    {{-- @endif --}}

@endsection
