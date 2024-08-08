<div>Hello im a template</div>

{{-- Using isset only display this div if $name is available --}}


<div>
    {{-- @if ( count($tasks) ) --}}

     @foreach ($tasks as $task )
        <div> {{$task->title}} </div>
     @endforeach
    @else
    <div>
        There are no tasks
    </div>

    {{-- @endif --}}
</div>
