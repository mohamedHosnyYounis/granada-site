@extends('layouts/layout')
@section('content')

<!-- Blog post with featured image -->
<div class="max-w-screen-xl mx-auto p-5 sm:p-8 md:p-12 relative">
    <h2 class="text-2xl font-semibold p-4 font-JF">{{ $page_title }}</h2>
    <div class="bg-cover h-96 text-center overflow-hidden rounded-lg"
    style="background-image:url({{asset('storage/assets/images/office.jpg')}});">
    </div>
    <div class="max-w-2xl mx-auto">
        <div
            class="mt-3 bg-white rounded-b p-8 lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
            <div class="">
                <p class="font-JF">{!! $lorn !!}</p>
            </div>

        </div>
    </div>
</div>





{{-- <div class="w-full md:w11/12 mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto p-8">
        <!-- Blog post header -->
        <div class="py-8">
            <h1 class="text-3xl font-bold mb-2">{{ $page_title }}</h1>
        </div>

        <!-- Featured image -->
        <img src="https://images.unsplash.com/photo-1493723843671-1d655e66ac1c" alt="Featured image" class="w-full h-auto mb-8">

        <!-- Blog post content -->
        <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
            {!! $lorn !!}
        </div>
    </div>
</div> --}}
@endsection