
@extends('frontend.app.master')


@section('content')


<section id="home" class="relative white height-60vh mnh-250 align-items-center d-flex" 
data-bg="url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg)" 
data-was-processed="true" 
style="background-image: url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg);">
    <div class="container-md">
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
                <a href="#" class="stay c-default opacity-7">Yolo Fitness</a>
                <i class="ti-angle-right fs-7 mx-15"></i>

                <a href="#" class="stay c-default opacity-7">Kampanyalarımız</a>
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
            <div class="col-12 mt-120 t-center">
                <h5 class="font-secondary uppercase fs-20 fs-14-sm black">
                    <a href="{{ route('hr')}}" class="career-btn underline-slide underline-hover-slide">
                        Ekibimize Katılmak İster Misin?
                    </a>
                </h5>
            </div>
        </div>
    </div>

</section>


@endsection