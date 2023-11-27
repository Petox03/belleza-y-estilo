<?php

use function Livewire\Volt\{state};

state(
    icon: '',
)

?>


<li>
    <a href="/#"
        class="block py-1 md:py-0 pl-3 pr-4 text-gray-900">
        <img class="w-[40px] h-[40px]" src="/icons/{{ $icon }}.png" alt="icon {{ $icon }}">
    </a>
</li>

