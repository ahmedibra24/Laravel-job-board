{{-- make default value for coming  props because if it empty thats will make errors --}}
@props(['active'=> false])

@php
$default="text-gray-300 hover:bg-white/5 hover:text-white";
$current="bg-gray-900 text-white";

@endphp

<a {{ $attributes }} class="rounded-md px-3 py-2 text-sm font-medium {{ $active? $current : $default }}">
    {{$slot}}
</a>