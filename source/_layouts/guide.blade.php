@extends('_layouts.main')

@section('body')
    <style>
        img {
            max-width: 300px;
        }

        .featuredImage {
            max-width: 150px;
        }

    </style>
    <div class="max-w-xl mx-auto print:mt-10 print:mb-5 print:text-left">
        @if ($page->image)
            <img class="mx-auto mb-5 featuredImage" src="{{ $page->image }}">
        @endif
        <h1 class="mx-auto print:ml-0">{{ $page->title }}</h1>
        <div class="mb-8">
            <p>{{ date('F j, Y', $page->date) }}</p>
            <p class="-mt-3">{{ $page->author ?? '' }}</p>
        </div>
        <a class="hidden underline print:inline-block" href="{{ $page->getUrl() }}">{{ $page->getUrl() }}</a>
    </div>
@endsection
@section('after')
    <div class="container grid gap-3 mx-auto mt-10 md:grid-cols-2 mb-7 print:hidden">
        @if ($page->getPrevious())
            <a class="flex items-center" href="{{ optional($page->getPrevious())->getUrl() }}">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 -mt-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                {{ optional($page->getPrevious())->title }}
            </a>
        @endif
        @if ($page->getNext())
            <a class="flex items-center col-start-2 text-right" href="{{ optional($page->getNext())->getUrl() }}">
                {{ optional($page->getNext())->title }}
                <div class="ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 -mt-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        @endif
    </div>
@endsection
