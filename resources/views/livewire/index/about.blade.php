<div id="nosotros" class="min-h-screen | p-7 md:p-[80px] | bg-[#F6F6F6] | scroll-mt-[90px]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-[130px]">
        <div class="">
            <p class="text-[#365045] text-lg md:text-2xl">¡Somos tu mejor opción!</p>
            <p class="text-[#030405] text-xl md:text-3xl">¿Por qué escoger "Belleza y Estilo"?</p>
            <p class="text-[#030405] lg:text-justify | mt-4 ">
                Belleza Y Estilo es una franquicia que cuenta con más de
                15 años de experiencia y múltiples sucursales, trabajamos
                diariamente para satisfacer a los clientes y mejorar la
                calidad de nuestro servicio. Además, contamos con los
                más capacitados estilistas para brindar el mejor servicio.
            </p>

            @livewire('about.reason', [
                'icon' => 'experience', 'bgColor' => '#7E98B2', 'title' => 'Experiencia', 'content' => 'Nuestra cadena de salones cuenta con más de 15 años de experiencia
                            y con más de 15 sucursales en todo el país.',
            ])

            @livewire('about.reason', [
                'icon' => 'certify', 'bgColor' => '#92A69D', 'title' => 'Certificados', 'content' => 'Nuestro personal está altamente calificado con cursos intensivos y con
                            cerificados que avalan su formación.',
            ])

            @livewire('about.reason', [
                'icon' => 'products', 'bgColor' => '#CCBBAC', 'title' => 'Alta Calidad', 'content' => 'Nuestros productos son de la más alta calidad para poder darte el mejor
                            servicio y brindarte de la mejor experiencia.',
            ])

            @livewire('about.reason', [
                'icon' => 'quality', 'bgColor' => '#F0EBB6', 'title' => 'Higiene', 'content' => 'Contamos con estrictas medidas de higiene en todas nuestras sucursales
                            para garantizarte un servicio de calidad.',
            ])

        </div>
        <div class="flex justify-center">
            <div class="w-[20rem] lg:w-full h-[12rem] md:h-[20rem] lg:h-[37.5rem] | grid grid-cols-2 gap-2.5 | sticky top-[100px] lg:static | mb-[15rem] md:mb-[10rem] lg:mb-0">
                @livewire('about.image', ['image' => 'team',             'borderTR' => true, 'borderTL' => false, 'borderBL' => true, 'borderBR' => false])
                @livewire('about.image', ['image' => 'decoration',       'borderTR' => false, 'borderTL' => true, 'borderBL' => false, 'borderBR' => true])
                @livewire('about.image', ['image' => 'templateProducts', 'borderTR' => false, 'borderTL' => true, 'borderBL' => false, 'borderBR' => true])
                @livewire('about.image', ['image' => 'products',         'borderTR' => true, 'borderTL' => false, 'borderBL' => true, 'borderBR' => false])
            </div>
        </div>
    </div>
</div>
