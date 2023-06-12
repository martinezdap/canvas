<x-app-layout>
    <div>
        <div class = "bg-whiteCanvas">
            <div class="container">
                <div class="flex items-center">
                    <div class="w-1/2 mr-4">
                        <div class="text-start">
                            <h1 class="title font-bold text-secondary text-4xl mb-2">Misión</h1>
                            <p class="text-xl text-blackCanvas">En Canvas, nuestra misión es brindar una experiencia excepcional a los amantes de las mascotas en el barrio [nombre de barrio] en la provincia de [nombre de la provincia]. Nos dedicamos a ser una tienda de mascotas líder, ofreciendo productos y servicios de alta calidad que satisfacen las necesidades de las mascotas y sus dueños. Nos esforzamos por ser el destino preferido para quienes buscan cuidar, alimentar y consentir a sus mascotas, brindando un ambiente acogedor y una atención personalizada.</p>
                        </div>
                    </div>
    
                    <div class="w-1/2 ml-4">
                        <figure class="mb-4 py-8">
                            <img class="w-full object-cover object-center rounded-lg" src="{{ asset('img/imagen-prueba.jpg') }}">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <div class="container">
                <div class="flex items-center">
                    <div class="w-1/2 mr-4">
                        <figure class="mb-4 py-8">
                            <img class="w-full object-cover object-center rounded-lg" src="{{ asset('img/imagen-prueba.jpg') }}">
                        </figure>
                    </div>

                    <div class="w-1/2 ml-4">
                        <div class="text-end">
                            <h1 class="title font-bold text-secondary text-4xl mb-2">Visión</h1>
                            <p class="text-xl text-blackCanvas">En Canvas, nuestra visión es convertirnos en la tienda de mascotas líder a nivel provincial, destacando como un emprendimiento independiente. 
                                Buscamos brindar una amplia selección de productos y servicios de calidad, creando un ambiente acogedor y personalizado para los amantes de las mascotas en 
                                Santiago del Estero. Nos esforzamos por ofrecer una experiencia excepcional, respaldada por un servicio al cliente sobresaliente y asesoramiento experto. 
                                Nuestro objetivo es fortalecer la relación entre las mascotas y sus dueños, contribuyendo al bienestar animal en nuestra comunidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <x-footercanvas />
    </div>
</x-app-layout>

