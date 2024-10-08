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
                    Ders Programı
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
                    <a href="#" class="stay c-default opacity-7">Ders Programı</a>
                </div>

            </div>
            </div>
            <div class="col-md-3 d-none d-lg-block t-center">
                <img src="/logo.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
            </div>
        </div>
    </div>
</section>

<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-12 t-center ">
                <img src="/program.png" alt="" class="img-fluid mb-80 mt-40">
            </div>
    
        </div>
    </div>
   
</section>

@endsection