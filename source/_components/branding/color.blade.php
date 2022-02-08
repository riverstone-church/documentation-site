@props([
'hex' => '',
'code' => '',
'textColor' => '',
'name' => '',
'description' => '',
])

<div class="border-2 rounded-lg overflow-hidden">
    <div
        class="border-b-2 p-6 h-48 flex justify-center items-center font-bold text-xl text-{{ $textColor }} bg-{{ $code }}">
        {{ $hex }}
    </div>
    <div class="px-5 pb-1">
        <h4>{{ $name ?? '' }}</h4>
        @isset($description)
        <p>{{ $description }}</p>
        @endisset
    </div>
</div>