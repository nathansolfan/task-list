<div>Hello im a template</div>

{{-- Using isset only display this div if $name is available --}}


<div>
    {{-- @if ( count($tasks) ) --}}

     @forelse ( $tasks as $task )
      <div>
         <a href="{{route('tasks.show'), ['id' => $task->id]}}"></a> {{$task->title}}
        </div>
     @empty

    <div>
        There are no tasks
    </div>

     @endforelse ($tasks as $task )





    {{-- @endif --}}
</div>
