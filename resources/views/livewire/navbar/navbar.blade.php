<nav class="bg-[#E7D9CC] border-[#CCBBAC] fixed top-0 w-full z-40">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="/img/logo-belleza-y-estilo-min.png" class="h-[60px] mr-3" alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-[#CCBBAC] focus:outline-none focus:ring-2 focus:ring-[#e0cebd]"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0">
                @livewire('navbar.navlink', ["href" => "/#", "content"=>"Inicio"])
                @livewire('navbar.navlink', ["href" => "/#nosotros", "content"=>"Nosotros"])
                @livewire('navbar.navlink', ["href" => "/#servicios", "content"=>"Servicios"])
                @livewire('navbar.navlink', ["href" => "/citas", "content"=>"Citas"])
            </ul>
        </div>
    </div>
</nav>
