
@extends('frontend.app.master')


@section('content')


<section id="home" class="relative white bg-soft-dark2 height-60vh mnh-250 align-items-center d-flex" 
data-bg="url('/back.jpg')" 
data-was-processed="true" 
style="background-image: url('/back.jpg');">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
               Yolo Fitness - Karşıyaka
            </h5>
            <h1 class="mt-15 lh-md white">
                Eğitmenlerimiz
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

                <a href="#" class="stay c-default opacity-7">Ekibimiz</a>
            </div>

        </div>
    </div>
</section>


<section id="team" class="pb-120 mt-50">

    <div class="container t-center">
        <h2 class="mt-15 fs-35 fs-25-sm bold lh-50 lh-40-sm dark3">
            Karşıyaka YOLO Fitness
        </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, laboriosam porro odit vitae sed fugit obcaecati distinctio iusto ut, aliquid pariatur voluptatum atque! Corporis ullam molestias, possimus error qui eligendi.</p>

    </div>

    <div class="container mt-55 t-left">

        <div class="row">
            @foreach ($All as $item)
            <div class="col-lg-4 col-sm-6 col-12 mt-30 c-plus" data-bs-toggle="modal" data-bs-target="#modal-0{{$item->id}}">
                <div class="row row-eq-height">
                    <div class="col-auto d-flex align-items-end">
                        <h5 class="t-vertical bold fs-13 black lh-normal ls-5 uppercase">Pilates Eğitmeni</h5>
                    </div>
                    <div class="col height-400 mr-15 dark-bottom d-flex align-items-end justify-content-start flex-wrap" data-bg="url(https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/a1/a15e3308ee7183d1b6cb5a3f61eca2846394fb43_full.jpg)">
                        <div class="t-center fullwidth p-3">
                            <h4 class="fs-13 white uppercase ls-3">{{ $item->title}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12 mt-120 t-center">
                <h5 class="font-secondary uppercase fs-20 fs-14-sm black">
                    <a href="#" class="career-btn underline-slide underline-hover-slide">
                        Ekibimize Katılmak İster Misin?
                    </a>
                </h5>
            </div>

        </div>
    </div>

</section>


    @foreach ($All as $item)
    <div id="modal-0{{ $item->id}}" class="modal fade fade-scale" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="modal-close close visible-lg white right-15" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                <button type="button" class="modal-close close hidden-lg right-15" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                <div class="row mx-0 row-eq-height">
                    <div class="col-lg-7 col-12 px-50 px-30-sm py-100">
                        <h4 class="light colored fs-20">
                            {{ $item->title}}
                        </h4>
                        <h6 class="gray6">
                           Pilates Eğitmeni
                        </h6>
                        <h4 class="mt-30 light dark1 fs-20 lh-35 fs-16-sm lh-30-sm">
                            Curabitur vitae dignissim libero, sed lobortis sem. Vestibulum bibendum quis purus at eleifend. Curabitur ex est, vulputate vitae augue at, gravida ullamcorper justo. In fringilla hendrerit commodo. Duis id eleifend eros, in sodales turpis. Integer ultrices tellus lacinia, bibendum mi quis, convallis urna.
                        </h4>
                        <h4 class="mt-15 light dark1 fs-20 lh-35 fs-16-sm lh-30-sm">
                            Sed id viverra felis, a feugiat ipsum. Vivamus non purus eu neque aliquet sagittis. Duis vitae dolor interdum, cursus erat vel, dictum felis. Curabitur hendrerit placerat fermentum.
                        </h4>
                        <div class="mt-40">
                            <a href="#" class="icon-sm opacity-8-hover bg-twitter white mr-5 slow-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="icon-sm opacity-8-hover bg-mail white mr-5 slow-sm">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 mnh-400" data-bg="url(https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/a1/a15e3308ee7183d1b6cb5a3f61eca2846394fb43_full.jpg)"></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection