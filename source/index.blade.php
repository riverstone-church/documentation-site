@extends('_layouts.main')

@section('body')
<section class="py-10 px-10 mt-8 mb-3 text-white rounded-lg shadow-xl"
    style="background-image: linear-gradient(90deg, rgba(0,51,173,0.75) 0%, rgba(0,79,173,0.6) 99%), url('/assets/images/hero-bg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <h1>Guides and Documentation</h1>
    <p>Here you will find information on the various technologies throughout RiverStone Church.</p>
</section>
<section class="my-10">
    <x-anchor href="/branding">Logos & Branding</x-anchor>
</section>
<section class="grid md:grid-cols-2 gap-5 pb-8 my-10">
    <div>
        <h2>Guides</h2>
        <ul>
            @foreach ($guides as $guide)
            <li class="max-w-xl h-full ml-8">
                <a href="{{ $guide->getPath() }}">
                    <h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1 -ml-8" fill="none"
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
    </div>
    <div>
        <h2>Documentation</h2>
        <ul>
            @foreach ($docs as $doc)
            <li class="max-w-xl h-full">
                <a href="{{ $doc->getPath() }}">
                    <h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        {{ $doc->title }}
                    </h4>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div>
        <h2>Service Bulletins</h2>
        <ul>
            @foreach ($serviceBulletins as $bulletin)
            <li class="max-w-xl h-full">
                <a href="{{ $bulletin->getPath() }}">
                    <h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="font-bold">{{ date('Y-m-d', $bulletin->date) }}</span>: {{ $bulletin->title }}
                    </h4>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection