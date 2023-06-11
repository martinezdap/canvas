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
                <a href="" class="bg-secondary py-2 px-4 rounded-lg text-white font-semibold uppercase">
                    Ver mas
                </a>
            </div>
        </section>
    </div>
    
    <x-footercanvas/>

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

</x-app-layout>
