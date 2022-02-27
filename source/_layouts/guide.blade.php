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

@if($page->image)
<img class="mx-auto mb-5 featuredImage" src="{{ $page->image }}">
@endif

<h1 class="text-center max-w-xl mx-auto">{{ $page->title }}</h1>
<p class="text-center">{{ date('F j, Y', $page->date) }}</p>
<p class="-mt-3 text-center">{{ $page->author ?? '' }}</p>
@endsection
@section('after')
<div class="max-w-xl mx-auto grid md:grid-cols-2 mt-10 mb-7 gap-3">
    @if($page->getPrevious())
    <a class="flex items-center" href="{{ optional($page->getPrevious())->getUrl() }}">
        <div class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </div>
        {{ optional($page->getPrevious())->title }}
    </a>
    @endif
    @if($page->getNext())
    <a class="flex items-center text-right col-start-2" href="{{ optional($page->getNext())->getUrl() }}">
        {{ optional($page->getNext())->title }}
        <div class="ml-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </a>
    @endif
</div>
@endsection