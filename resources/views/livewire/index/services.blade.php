<?php

use function Livewire\Volt\{state};

?>

<div id="servicios" class="min-h-screen | p-7 md:p-[80px] | scroll-mt-[90px]">
    <h3 class="text-3xl text-center">Nuestros Servicios</h3>
    <p class="text-[#365045] text-lg text-center | mt-4">Estos son los servicios que nuestro salón tiene para ti</p>

    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-9 | mt-9">
        @livewire('services.card', ['img' => 'corte', 'service' => 'Corte de cabello'])
        @livewire('services.card', ['img' => 'manicure-pedicure', 'service' => 'Manicure y pedicure'])
        @livewire('services.card', ['img' => 'masajes', 'service' => 'Masajes corporales'])
        @livewire('services.card', ['img' => 'facial', 'service' => 'Tratamientos faciales'])
        @livewire('services.card', ['img' => 'maquillaje', 'service' => 'Maquillaje'])
        @livewire('services.card', ['img' => 'peinado', 'service' => 'Peinado'])
    </div>

</div>
