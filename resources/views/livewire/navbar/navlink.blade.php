<?php

use function Livewire\Volt\{state};

state(
    href: '',
    content: '',
);

?>

<li>
    <a href="{{ $href }}"
        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[#CCBBAC] md:hover:bg-transparent md:border-0 md:hover:text-[#365045] md:p-0">
        {{ $content }}
    </a>
</li>
