<x-app-layout>

    <div>
        @livewire('slider-ofertas')
    </div>

    <div>
        <section class="flex flex-col items-center mb-8">
            <h1 class="text-lg sticky uppercase text-whiteCanvas bg-secondary py-2 mb-2 text-center w-full">
                Productos destacados
            </h1>

            <div class="container py-6">
                @livewire('slider-products', ['products' => $products])
            </div>

            <div>
                <a href="{{ route('categories.show', $category) }}" class="bg-secondary py-2 px-4 rounded-lg text-white font-semibold uppercase">
                    Ver mas
                </a>
            </div>
        </section>
    </div>
    

    @push('script')
        <script>
            Livewire.on('glider', function() {
                new Glider(document.querySelector('.glider-products'), {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    draggable: false,
                    rewind: true,
                    dots: '.glider-products' + '~ .dots',
                    arrows: {
                        prev: '.glider-products' + '~ .glider-prev',
                        next: '.glider-products' + '~ .glider-next'
                    }
                });
            })
        </script>
    @endpush

    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    slideshow: true,
                    slideshowSpeed: 5000,
                    before: function(slider) {
                        if (slider.currentSlide === slider.count - 1 && slider.direction === "next") {
                            slider.flexAnimate(1);
                        } else if (slider.currentSlide === 0 && slider.direction === "prev") {
                            slider.flexAnimate(slider.count - 2);
                        }
                    }
                });
            });
        </script>
    @endpush
    <div class="container ">
        <div class="flex items-center bg-secondary text-whiteCanvas">
            <img src="{{ asset('img/ducha mascota.jpg') }}" class="w-110 h-80 object-cover mr-10  pt-8 pb-8 ">
            <div class="text-right py-2 pr-60 ml-10 ">
                <h1 class="text-4xl font-bold mb-3">Servicio de Peluquería canina</h1>
                <p class="text-lg">Reserva un turno para tu mascota a traves de la pagina web! Elegi el horario que mas
                    te
                    guste</p>
                <button class="mt-6 bg-primary text-secondary font-bold py-2 px-6 rounded">SOLICITAR TURNO</button>
            </div>
        </div>

        <div class="flex items-center bg-grayCanvas ">
            <div class="text-left py-2 pl-60 mr-10">
                <h1 class="text-4xl font-bold mb-3">Sobre Nosotros</h1>
                <p class="text-lg text-grayP">Canvas es una tienda especializada en productos y servicios para mascotas.
                    La
                    cual se centra en brindar una experiencia diferente de compra, ofreciendo productos y servicios de
                    alta
                    calidad que buscan cumplir con las necesidades de sus cachorros</p>
                <button class="mt-6 bg-secondary text-white font-bold py-2 px-6 rounded">Sobre nosotros</button>
            </div>
            <img src="{{ asset('img/perroygato.jpg') }}" class="w-110 h-80 object-cover ml-10 pt-8 pb-8">
        </div>
    </div>
    <x-footercanvas />

</x-app-layout>
