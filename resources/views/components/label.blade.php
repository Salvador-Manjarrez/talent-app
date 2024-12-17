

@php

$classes = "font-bold bg-white/10 rounded-xl hover:bg-white/25 transition-colors duration-300 mt-2 mb-5 px-5 py-1 text-sm";

@endphp


<p class=" {{ $classes }} " >{{ $slot }}</p> 