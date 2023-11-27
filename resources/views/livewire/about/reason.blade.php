<?php

use function Livewire\Volt\{state};

state(
    icon: '',
    bgColor: '',
    title: '',
    content: '',
);

?>

<div class="flex justify-start gap-x-4 | mt-5">

    <div class="bg-[{{ $bgColor }}] h-full | p-2.5">
        <img class="lg:w-16 lg:h-12" src="icons/{{ $icon }}.png" alt="{{ $icon }}">
    </div>

    <div class="flex flex-col lg:text-justify">
        <h4 class="text-xl font-semibold">{{ $title }}</h4>
        <p class="text-md">{{ $content }}</p>
    </div>

</div>

