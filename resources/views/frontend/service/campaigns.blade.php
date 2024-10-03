
@extends('frontend.app.master')


@section('content')


<section id="home" class="relative white bg-soft-dark2 height-60vh mnh-250 align-items-center d-flex"  data-bg="url('/back.jpg')" data-was-processed="true"  style="background-image: url('/back.jpg');">
    <div class="container mt-100">
        <div class="row">
            <div class="col-md-3 d-none d-lg-block">
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
                Kampanyalarımız
            </h1>

            <div
                class="mt-30 uppercase fs-12 bold bg-soft-dark3 radius-lg py-10 px-40 d-inline-flex width-auto lh-normal align-items-center">
                <a href="{{ route('home')}}">
                    <i class="ti-home"></i>
                </a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="{{ route('home')}}">Anasayfa</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
               

                <a href="#" class="stay c-default opacity-7">Kampanyalarımız</a>
            </div>

        </div>
            </div>
            <div class="col-md-3 d-none d-lg-block t-center">
                <img src="/logo.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
            </div>
        </div>
    </div>
</section>


<section id="team" class="pb-120 mt-50">

    <div class="container t-center">
        <h2 class="mt-15 fs-35 fs-25-sm bold lh-50 lh-40-sm dark3">
            Karşıyaka YOLO Fitness
        </h2>
    </div>
    <div class="container mt-55 t-left">
        <div class="row">
            @foreach ($All as $item)
            <div class="col-lg-4 col-sm-6 col-12 mt-30 c-plus" data-bs-toggle="modal" data-bs-target="#modal-0{{$item->id}}">
                <div class="row row-eq-height">
                    <div class="col height-400 mr-15 dark-bottom d-flex align-items-end justify-content-start flex-wrap" data-bg="url({{ (!$item->getFirstMediaUrl('page')) ? '/front/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}})">
                        <div class="t-center fullwidth p-3">
                            <h4 class="fs-13 white uppercase ls-3">{{ $item->title}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>

</section>


@endsection