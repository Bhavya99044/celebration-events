

@extends('layouts.app')
@section('content')
{{-- @include('sections.dedicated-team') --}}
{{-- @include('sections.technologies')
@include('sections.about-us')
@include('sections.faq')
@include('sections.collab-touch')
@include('sections.industry') --}}
{{-- @include('sections.showcase') --}}
{{-- @include('sections.who-startups') --}}
@php
$industries = [
    ['name' => 'healthcare', 'label' => 'Healthcare'],
    ['name' => 'fintech', 'label' => 'Fintech/BFSI'],
    ['name' => 'real-estate', 'label' => 'Real Estate'],
    ['name' => 'education', 'label' => 'Education'],
    ['name' => 'logistics', 'label' => 'Logistics & Transportation'],
    ['name' => 'retail', 'label' => 'Retail & E-commerce'],
];
@endphp

<section class="w-full mt-40 flex items-center justify-center">
    <div class="max-w-[1440px] inter flex flex-col items-center">
        <div class="max-w-[722px] flex flex-col gap-8 text-center">
            <h2 class="text-[52px] leading-[72px] tracking-[-1px]">Our Industry-Specific Software Development Expertise</h2>
            <p class="text-lg leading-[28px] text-gray-700 px-2">
                From startups to Fortune 500 companies, we provide custom software development services to businesses from various industries.
            </p>
        </div>

        <div class="mt-10 flex flex-wrap justify-center gap-20">
            @foreach($industries as $index=>$item)
                <div class="flex max-w-[108px] flex-col items-center text-center">
                    <img src="{{ asset('healthcare-frame.png') }}" alt="{{ $item['label'] }}" class="p-6 rounded-full border border-gray-500" />
                    <span class="capitalize text-[18px] break-normal @if($index==0) font-semibold @endif  pt-2 leading-7">{{ $item['label'] }}</span>
                </div>
            @endforeach

            <div class="flex items-center justify-center w-[108px] h-[108px] rounded-full border p-5  border-gray-500 bg-white text-center">
                <span class="text-gray-700 text-sm font-medium ">Many More...</span>
            </div>
        </div>

        <div class="mt-15 flex flex-col md:flex-row w-full max-w-[1440px]">
            <div class="flex relative flex-col px-[61px]  bg-[#FF6B43] pt-[60px] pb-[44px]">

                <span class="text-black bg-white text-start rounded-[56px] w-fit text-[36px] leading-[36px] px-6 py-2 tracking-tight">Healthcare</span>

                <ul class="list-disc mt-6 pl-9 text-white space-y-2 z-20">
                    <li class="text-[24px] leading-[52px] tracking-[-1px]">Telemedicine Solution</li>
                    <li class="text-[24px] leading-[52px] tracking-[-1px]">Electronic Health Records (EHR)</li>
                    <li class="text-[24px] leading-[52px] tracking-[-1px]">Practice Management Systems</li>
                    <li class="text-[24px] leading-[52px] tracking-[-1px]">Clinical Software Solutions</li>
                    <li class="text-[24px] leading-[52px] tracking-[-1px]">Medical Device Integrations Solutions</li>
                </ul>

                <div class="flex gap-[10px] pt-[52px] z-20">
                    <button class="h-15 w-15 flex items-center justify-center bg-white rounded-full">
                        <img class="h-5" src="{{ asset('Icon.png') }}" alt="Prev" />
                    </button>
                    <button class="h-15 w-15 flex items-center justify-center bg-black rounded-full">
                        <img class="h-5" src="{{ asset('white-right-arrow.png') }}" alt="Next" />
                    </button>
                </div>
    {{-- <div class="absolute top-0 right-[-80px] h-full w-full bg-red-600 rounded-l-[40px] z-10"></div> --}}
</div>

            <div class="max-w-[892px] rounded-[40px]">
                <div class=" overflow-hidden  h-[100%]  w-[100%]  rounded-r-[40px] bg-[#FF6B43]">
                    <div class="bg-white h-[100%]  w-[100%] p-6 rounded-[40px]">
                <img src="{{ asset('health.png') }}" alt="Healthcare" class="rounded-[40px]  object-fit" />
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="relative w-[100px] bg-[#fa5a39]  text-white px-8 py-8 overflow-hidden">
    <!-- Background stripe effect -->
    {{-- <div class="absolute inset-0 bg-[repeating-linear-gradient(0deg,#f86b46_0px,#f86b46_10px,#fa5a39_10px,#fa5a39_20px)] opacity-70 rounded-3xl z-0"></div> --}}
    {{-- <div class="absolute top-0 right-[-60px] h-full w-full bg-red-600 rounded-l-[40px] z-10"></div> --}}

    <!-- Outside white curve -->

    <!-- Content (placed above background and curve) -->
    {{-- <div class="relative z-20"> --}}
        <!-- Header Badge -->


      <!-- Bullet List -->


      <!-- Arrows -->

    {{-- </div>
  </div> --}}
@endsection
