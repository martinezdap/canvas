<x-app-layout>
    <div>
        <div class="bg-whiteCanvas">
            <div class="container">
                <div class="flex items-center">
                    <div class="w-1/2 mr-4">
                        <div class="text-start">
                            <h1 class="title font-bold text-secondary text-4xl mb-2">Misión</h1>
                            <p class="text-xl text-blackCanvas">En Canvas, nuestra misión es brindar una experiencia
                                excepcional a los amantes de las mascotas en el barrio Lomas del Golf en la provincia de
                                Santiago del Estero. Nos dedicamos a ser una tienda de mascotas líder, ofreciendo
                                productos y servicios de alta calidad que satisfacen las necesidades de las mascotas y
                                sus dueños. Nos esforzamos por ser el destino preferido para quienes buscan cuidar,
                                alimentar y consentir a sus mascotas, brindando un ambiente acogedor y una atención
                                personalizada.</p>
                        </div>
                    </div>
                    <div class="w-1/2 ml-4">
                        <figure class="mb-4 py-8">
                            <img class="w-full object-cover object-center rounded-lg"
                                src="{{ asset('img/imagen-prueba.jpg') }}">
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
                            <img class="w-full object-cover object-center rounded-lg"
                                src="{{ asset('img/imagen-prueba.jpg') }}">
                        </figure>
                    </div>
                    <div class="w-1/2 ml-4">
                        <div class="text-end">
                            <h1 class="title font-bold text-secondary text-4xl mb-2">Visión</h1>
                            <p class="text-xl text-blackCanvas">En Canvas, nuestra visión es convertirnos en la tienda
                                de mascotas líder a nivel provincial, destacando como un emprendimiento independiente.
                                Buscamos brindar una amplia selección de productos y servicios de calidad, creando un
                                ambiente acogedor y personalizado para los amantes de las mascotas en
                                Santiago del Estero. Nos esforzamos por ofrecer una experiencia excepcional, respaldada
                                por un servicio al cliente sobresaliente y asesoramiento experto.
                                Nuestro objetivo es fortalecer la relación entre las mascotas y sus dueños,
                                contribuyendo al bienestar animal en nuestra comunidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="bg-whiteCanvas">
            <div class="container flex flex-col justify-center py-8">
                <h1 class="title font-bold text-secondary text-4xl mb-4 text-center">Objetivos</h1>
                <div class="grid grid-cols-3 gap-6 ">
                    <div class="flex flex-col items-center col-span-1">
                        <div class="flex justify-center py-4">
                            <i class="fa-solid fa-face-laugh-beam text-6xl text-secondary"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-center text-blackCanvas">Promover la satisfacción del
                                cliente</h3>
                            <p class="text-lg mt-2 text-center text-grayP">Brindar una experiencia excepcional a
                                nuestros clientes, generando relaciones sólidas y duraderas basadas en la confianza y la
                                satisfacción de sus necesidades.</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center ml-4 col-span-1">
                        <div class="flex justify-center py-4">
                            <i class="fa-solid fa-bag-shopping text-6xl text-secondary"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-center text-blackCanvas">Brindar calidad en nuestros
                                productos</h3>
                            <p class="text-center text-lg mt-2 text-grayP">Realizar una exhaustiva selección de
                                alimentos caninos de alta calidad y ofrecer una amplia variedad de opciones para
                                satisfacer las necesidades nutricionales de todas las razas y tamaños.</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center ml-4 col-span-1">
                        <div class="flex justify-center py-4">
                            <i class="fa-solid fa-soap text-6xl text-secondary"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-center text-blackCanvas">Brindar servicios de peluquería
                                canina de excelencia</h3>
                            <p class="text-center text-lg mt-2 text-grayP">Contamos con profesionales expertos en el
                                cuidado y estilismo canino, ofreciendo servicios de peluquería de calidad superior para
                                que las mascotas luzcan siempre saludables y estén bien cuidadas.</p>
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