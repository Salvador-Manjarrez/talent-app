
@php

$classes = "p-4 bg-white/5 rounded-xl border border-transparent hover:border-red-600 group transition-colors duration-300 shadow-xl mt-5"

@endphp


<div {{ $attributes(['class' => $classes]) }} >

    {{ $slot }}

</div>