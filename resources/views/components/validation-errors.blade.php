@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-redError">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-redError">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
