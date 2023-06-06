<div>
    <p class="text-lg text-grayP">Color</p>

    <select>
        <option value="" selected disbled>Seleccionar un color</option>

        @foreach ($colors as $color)
            <option value="{{ $color->id }}">{{$color->name}}</option>
        @endforeach
    </select>
</div>
