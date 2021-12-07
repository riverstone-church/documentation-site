@extends('_layouts.main')

@section('body')
<h1 class="text-center max-w-3xl mx-auto">{{ $page->title }}</h1>
<p class="text-center">{{ date('F j, Y', $page->date) }}</p>
@endsection