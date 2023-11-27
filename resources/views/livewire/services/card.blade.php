<?php

use function Livewire\Volt\{state};

state(
    img: '',
    service: '',
)

?>


<div class="flex justify-center">

    <div class="w-[23rem] h-[28rem] |bg-repeat bg-center | rounded-lg shadow-xl | mb-9 md:mb-0" style="background-image: url('/img/services/{{ $img }}.png');">
        <div class="h-full | flex items-center justify-center | rounded-lg | bg-black/40  | text-xl lg:text-2xl text-white/90">
            <p>{{ $service }}</p>
        </div>
    </div>

</div>


