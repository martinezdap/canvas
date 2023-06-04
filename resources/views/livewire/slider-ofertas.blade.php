<div>
    <style>
        .flexslider {
            height: auto;
            position: relative;
            border: none;
            /* Elimina el borde del carrusel */
            box-shadow: none;
            /* Elimina el sombreado del carrusel */
            bottom: 0;
            margin-bottom: 0;
            /* Elimina el margen inferior de los indicadores */
            padding-bottom: 0;
            /* Elimina el padding inferior de los indicadores */
            overflow: hidden;
        }

        .flex-control-nav,
        .flex-prev,
        .flex-next {
            position: absolute;
            z-index: 3;
            border: none;
            /* Elimina el borde de los botones prev y next */
        }

        .flex-control-nav {
            bottom: 10px;
            /* Ajusta la posición vertical según tus necesidades */
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
            /* Ajusta la posición de los indicadores */
            margin-bottom: 0;
            /* Elimina el margen inferior de los indicadores */
            padding-bottom: 0;
            /* Elimina el padding inferior de los indicadores */
        }

        .flex-prev,
        .flex-next {
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            /* Ajusta el ancho según tus necesidades */
            height: 40px;
            /* Ajusta la altura según tus necesidades */
            border-radius: 50%;
            /* Ajusta el radio del borde según tus necesidades */
            text-align: center;
            line-height: 40px;
            /* Ajusta la altura de línea según tus necesidades */
            font-size: 16px;
            /* Ajusta el tamaño de fuente según tus necesidades */
            color: #000;
            /* Cambia el color del texto según tus necesidades */
        }
    </style>

    <div class="flexslider">
        <ul class="slides">
            <li>
                <img class="w-full max-h-80 object-cover object-center" src="{{ asset('img/slider1.png') }}">
            </li>
            <li>
                <img class="w-full max-h-80 object-cover object-center" src="{{ asset('img/slider2.png') }}">
            </li>
            <li>
                <img class="w-full max-h-80 object-cover object-center" src="{{ asset('img/slider3.png') }}">
            </li>
            <li>
                <img class="w-full max-h-80 object-cover object-center" src="{{ asset('img/slider4.png') }}">
            </li>
        </ul>
        <ol class="flex-control-nav"></ol>
    </div>
</div>
