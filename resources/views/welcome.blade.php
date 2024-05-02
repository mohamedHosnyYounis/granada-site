@extends('layouts/layout')

@section('home_slider')
<section class="bg-granada-betrolum w-full">
    <div class="w-full md:h-screen content-center md:w-11/12 m-auto  grid gap-8 grid-cols-1 md:grid-cols-3 font-JF">
            <div class="col-span-full md:col-span-1 bg-cover  md:w-[98%] min-h-[60vh] max-h-[96vh] max-w-full md:rounded-tl-[20rem] md:rounded-br-[20rem]" 
            style="background-image:url({{asset('storage/assets/images/work.jpg')}});">

            </div>
            {{-- <img src="{{asset('storage/assets/images/work.jpg')}}" class="h-fit max-w-full md:rounded-tl-[150px] md:rounded-br-[150px]" alt=""/>    --}}
        <div class="grid gap-4 justify-items-end px-6 col-span-full content-center md:col-span-2 md:text-left">
            <div class="text-white">
                <h2 class="text-2xl  md:text-6xl font-extrabold">نحول افكارك التقنية الي واقع <span class="text-granada-betrolum-wraming">ملموس</span></h2>
                <p class="text-xl font-semibold mt-4">متخصصين في انشاء وتطوير المواقع والتطبيقات</p>
            </div>
            <div class=" w-fit justify-self-end mt-8 md:flex md:justify-end">
                <button class="bg-granada-betrolum-warm hover:bg-granada-betrolum-lighter hover:text-white hover:transition-colors duration-500 w-[300px] h-[50px] md:w-[200px] md:h-[50px] rounded-md">اعرف اكتر</button>
            </div>
            <div class="w-fit ml-auto mt-6 justify-self-left grid grid-cols-1 mx-auto md:mx-0 pb-4 md:pb-0 md:grid-cols-3  gap-6 lg:justify-items-start ">
                <div class=" border-[2px] bg-white/10 w-[230px] h-[65px] md:w-[130px] md:h-[65px] border-black/50 rounded-xl text-center">
                    <h2 class="text-2xl font-semibold text-white">150+</h2>
                    <p class="text-base text-gray-300">عميل</p>
                </div>
                <div class=" border-[2px] bg-white/10 w-[230px] h-[65px] md:w-[130px] md:h-[65px] border-black/50 rounded-xl text-center">
                    <h2 class="text-2xl font-semibold text-white">100+</h2>
                    <p class="text-base text-gray-300">مشروع</p>
                </div>
                <div class=" border-[2px] bg-white/10 w-[230px] h-[65px] md:w-[130px] md:h-[65px] border-black/50 rounded-xl text-center">
                    <h2 class="text-2xl font-semibold text-white">7+</h2>
                    <p class="text-base text-gray-300">خدمة</p>
                </div>
                
            </div>
        </div>
    </div>

</section>
@endsection
@section('content')
@include('layouts/trustedby')
@include('../home/servicess')
@include('../home/portfolio')
@include('../home/about')
@include('../home/testmonial')
@include('../home/blogs')
@endsection