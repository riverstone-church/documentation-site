@extends('_layouts.main')

@section('body')
<section class="py-8">
    <h1>Guides and Documentation</h1>
    <p>Here you will find information on the various technologies throughout RiverStone Church.</p>
    <ul class="grid gap-3 pt-3">
        @foreach ($guides as $guide)
        <li class="w-full h-full">
            <a href="{{ $guide->getPath() }}">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    {{ $guide->title }}
                </h4>
            </a>
        </li>
        @endforeach
    </ul>
</section>
@endsection