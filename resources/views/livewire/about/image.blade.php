<?php

use function Livewire\Volt\{state};

state(
    image: '',
    borderTL: '',
    borderTR: '',
    borderBL: '',
    borderBR: '',
);

?>

<div class="h-[12rem] lg:h-full">
    <img src="img/us/{{ $image }}.png" alt="us image"
        class=" w-[12rem] lg:w-full h-[12rem] lg:h-full {{ $borderTL ? 'rounded-tl-[50px] md:rounded-tl-[80px]' : '' }} {{ $borderTR ? 'rounded-tr-[50px] md:rounded-tr-[80px]' : '' }} {{ $borderBL ? 'rounded-bl-[50px] md:rounded-bl-[80px]' : '' }} {{ $borderBR ? 'rounded-br-[50px] md:rounded-br-[80px]' : '' }}">
</div>
