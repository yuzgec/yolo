@extends('frontend.app.master')
@section('content')

<section id="home" class="relative white bg-soft-dark2 height-60vh mnh-250 align-items-center d-flex"  data-bg="url('/back.jpg')" data-was-processed="true"  style="background-image: url('/back.jpg');">
    <div class="container mt-100">
        <div class="row">
            <div class="col-md-3">
                <p class="fs-32 lh-35 bold">YOU</p>
                <p class="fs-32 lh-35 bold">ONLY</p>
                <p class="fs-32 lh-35 bold">LIVE</p>
                <p class="fs-32 lh-35 bold">ONCES</p>
            </div>
            <div class="col-md-6">
               
            <div class="t-center">
                <h5 class="fs-11 ls-4 semibold white uppercase">
                    Yolo Fitness - Karşıyaka
                </h5>
                <h1 class="mt-15 lh-md white">
                    {{ $Detay->title}}
                </h1>
                <div
                    class="mt-30 uppercase fs-12 bold bg-soft-dark3 radius-lg py-10 px-40 d-inline-flex width-auto lh-normal align-items-center">
                    <a href="{{ route('home')}}">
                        <i class="ti-home"></i>
                    </a>
                    <i class="ti-angle-right fs-7 mx-15"></i>
                    <a href="{{ route('home')}}">Anasayfa</a>
                    <i class="ti-angle-right fs-7 mx-15"></i>
                    <a href="#" class="stay c-default opacity-7">Kurumsal</a>
                    <i class="ti-angle-right fs-7 mx-15"></i>
                    <a href="#" class="stay c-default opacity-7">{{ $Detay->title}}</a>
                </div>

            </div>
            </div>
            <div class="col-md-3 t-center">
                <img src="/logo.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
            </div>
        </div>
    </div>
</section>
<div id="elementDescription" class="container py-100 py-100-sm">

    <div class="fs-16 fs-16-sm gray7 ls-0 lh-35 light">
        {!! $Detay->desc !!}
    </div>

</div>

<section id="service-boxes-02" class="pt-30 pb-60 bg-gray2 bt-1 b-gray1">
    <div class="container">

        <div class="col t-center">
            <h2 class="lh-45 mt-10 uppercase">Stüdyolarımız</h2>
            <p class="light gray6 mt-15 lh-30 fs-18">Karşıyaka <b class="font-bold">YOLO Fitness </b>stüdyolarını aşağıdan inceleyebilirsiniz.</p>
        </div>

        <div class="row t-left t-center-sm align-items-center">
            @foreach ($Service->where('category', 2) as $item)
            <div class="col-lg-4 col-12 mt-30 perspective-lg relative zi-hover">
                <div class="bg-white bs-lg-hover dark2 slow c-default py-40 px-40">
                    <h5 class="fs-18 medium mt-25">
                        <a href="{{ route('studio', $item->slug)}}" title="{{ $item->title}}">
                            {{ $item->title}}
                        </a>
                    </h5>
                    <div class="fs-16 lh-25 mt-15 light">
                    {!! $item->short !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection