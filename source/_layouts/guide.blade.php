@extends('_layouts.main')

@section('body')
<h1 class="text-center max-w-3xl mx-auto">{{ $page->title }}</h1>
<p class="text-center">{{ date('F j, Y', $page->date) }}</p>
@endsection
@section('after')
<div class="container grid grid-cols-2 mt-5">
    @if($page->getPrevious())
    <a class="text-right" href="{{ optional($page->getPrevious())->getUrl() }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        {{ optional($page->getPrevious())->title }}
    </a>
    @endif
    @if($page->getNext())
    <a class="col-start-2" href="{{ optional($page->getNext())->getUrl() }}">
        {{ optional($page->getNext())->title }}
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 -mt-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </a>
    @endif
</div>
@endsection