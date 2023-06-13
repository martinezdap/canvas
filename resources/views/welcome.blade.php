<x-app-layout>

    <div>
        @livewire('slider-ofertas')
    </div>

    <div>
        <section class="flex flex-col items-center">
            <h1 class="text-lg sticky uppercase text-whiteCanvas bg-secondary py-2 mb-2 text-center w-full">
                Productos destacados
            </h1>

            <div class="container py-6">
                @livewire('slider-products', ['products' => $products])
            </div>

            <div class="mb-6">
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
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: false,
                    rewind: true,
                    dots: '.glider-products' + '~ .dots',
                    arrows: {
                        prev: '.glider-products' + '~ .glider-prev',
                        next: '.glider-products' + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 5,
                            }
                        }
                    ]
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

    <div>
        <div class="bg-secondary py-8">
            <div class="container mx-auto flex flex-col-reverse md:flex-row items-center px-4 md:px-6 lg:px-8">
                <div class="w-full md:w-1/2 md:mr-4 md:flex hidden">
                    <img src="{{ asset('img/servicio-peluqueria.jpg') }}" class="w-full h-96 rounded-xl object-cover object-center">
                </div>
                <div class="w-full md:w-1/2 text-whiteCanvas text-center md:text-end md:ml-4">
                    <h1 class="text-3xl md:text-5xl font-semibold mb-3">Servicio de peluquería canina</h1>
                    <p class="text-md md:text-xl">Te invitamos a reservar un turno para tu mascota a través de nuestra página web. Seleccioná el horario que más te guste.</p>
                    <button class="bg-primary text-secondary rounded-md py-2 px-4 mt-4 font-semibold">SOLICITAR TURNO</button>
                </div>
            </div>
        </div>
        <div class="bg-whiteCanvas py-8">
            <div class="container mx-auto flex flex-col-reverse md:flex-row items-center px-4 md:px-6 lg:px-8">
                <div class="w-full md:w-1/2 text-blackCanvas text-center md:text-start md:mr-4">
                    <h1 class="text-3xl md:text-5xl font-semibold mb-3">Sobre nosotros</h1>
                    <p class="text-md md:text-xl">Canvas es una tienda especializada en productos y servicios exclusivos para mascotas. Nos enfocamos en proporcionar una experiencia de compra única, donde encontrarás una amplia gama de productos y servicios de la más alta calidad, diseñados específicamente para satisfacer las necesidades de tus adorables compañeros peludos.</p>
                    <a href="{{ url('/sobrenosotros') }}">
                        <button class="bg-secondary text-whiteCanvas rounded-md py-2 px-4 mt-4 font-semibold">QUIERO SABER MÁS</button>
                    </a>
                </div>
                <div class="w-full md:w-1/2 md:ml-4">
                    <figure>
                        <img src="{{ asset('img/sobre-nosotros.jpg') }}" class="w-full h-96 rounded-xl object-cover object-center md:mb-0 mb-4">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <x-footercanvas />
</x-app-layout>
