<div>
    <img class="w-screen md:h-[250px] mb-5" src="/img/footer.png" alt="">
    <div class="relative md:h-12 md:mx-[5rem]">
        <a href="/" class="absolute left-1/2 translate-x-[-50%] translate-y-0 top-0">
            <img src="/img/logo-belleza-y-estilo-min.png" class="h-[4rem]" alt="Logo" />
        </a>

        <div class="grid grid-cols-2 gap-4">


            <div class="absolute left-0 top-0 md:top-1/2">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    @livewire('footer.footlink', ['href' => '/', 'content' => 'Inicio'])
                    @livewire('footer.footlink', ['href' => '/#nosotros', 'content' => 'Nosotros'])
                    @livewire('footer.footlink', ['href' => '/#servicios', 'content' => 'Servicios'])
                    @livewire('footer.footlink', ['href' => '/citas', 'content' => 'Citas'])
                </ul>
            </div>

            <div class="absolute right-0 top-0 md:top-1/2">
                <ul class="flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    @livewire('footer.footsocialmedia', ['icon' => 'facebook'])
                    @livewire('footer.footsocialmedia', ['icon' => 'instagram'])
                    @livewire('footer.footsocialmedia', ['icon' => 'twitter'])
                    @livewire('footer.footsocialmedia', ['icon' => 'whatsapp'])
                </ul>
            </div>
        </div>

    </div>

</div>
