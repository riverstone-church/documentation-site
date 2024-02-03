@props([
    'src' => '',
    'name' => '',
    'description' => '',
    'imagePadding' => true,
    'background' => 'bg-white',
])

<div class="border-2 rounded-lg overflow-hidden">
    @isset($src)
        <div class="border-b-2 {{ $imagePadding ? 'p-6' : '' }} {{ $background }}">
            <img class="mx-auto" src="{{ $src }}" alt="{{ $name }}">
        </div>
        @endif
        <div class="px-5 pb-3">
            <h4>{{ $name ?? '' }}</h4>
            @isset($description)
                <p>{{ $description }}</p>
            @endisset
            <x-anchor href="{{ $src }}" download="true">Download</x-anchor>
        </div>
    </div>
