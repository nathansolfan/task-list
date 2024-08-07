<div>Hello im a template</div>

{{-- Using isset only display this div if $name is available --}}
@isset()
<div>And the name is : {{ $name }}</div>
@endisset
