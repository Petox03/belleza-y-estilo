<?php

use function Livewire\Volt\{state};

state(
    href:'',
    content:'',
);

?>

<li>
    <a href="{{ $href }}"
        class="block py-3 pl-3 pr-4 text-gray-900">
        {{ $content }}
    </a>
</li>

