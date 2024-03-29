@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-25vh mnh-250 align-items-center d-flex" 
data-bg="url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg)" 
data-was-processed="true" 
style="background-image: url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg);">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
                Yolo Fitness
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
                <a href="{{ route('home')}}" title="Anasayfa">Anasayfa</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="{{ route('studios')}}" title="Hizmetlerimiz"  class="c-default">Hizmetlerimiz</a>
                <i class="ti-angle-right fs-7 mx-15"></i>

                <a href="#" class="stay c-default opacity-7">{{ $Detay->title}}</a>
            </div>

        </div>
    </div>
</section>

<section id="home" class="fullwidth bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 pt-50">
                <div class="fs-16 fs-16-sm gray7 ls-0 lh-35 light">
                    <div>
                    <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/front/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}" alt="Karşıyaka {{ $item->title}} - Karşıyaka Yolo Studio" class="img-fluid mb-30">
                    </div>

                    {!! $Detay->desc !!}
                </div>
            </div>
            <div class="col-md-4 pl-30 col-12 bg-gray pt-30">   

                <div id="contact-form-section">
                    <h5 class="uppercase fs-14 medium ls-3 ls-1-sm" data-color="#000">
                        Karşıyaka YOLO Fitness
                    </h5>
                  
                    <form class=" mt-40" name="contact_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="name1" id="name1" placeholder="Adınız Soyadınız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                            </div>
                            <div class="col-12 mt-20">
                                <input type="email" name="email1" id="email1" placeholder="E-Mail Adresiniz*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                            </div>
                            <div class="col-12 mt-20">
                                <textarea name="message1" id="message1" placeholder="Mesajınız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder height-150"></textarea>
                            </div>
                            <div class="col-12 mt-20 d-flex justify-content-start align-items-center">
                               <button type="submit" id="submit" class="inline-block width-250 py-20 bs-colored white ls-3-hover slow bold fs-14 uppercase"
                                data-bgcolor="#000">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div
                    class="fs-15 gray8  lh-lg mb-30  px-15-sm py-50 py-20-sm">
                    <h4 class="fs-17 black">STÜDYOLARIMIZ</h4>
                    @foreach ($Service->where('category', 2) as $item)
                    <a
                        href="{{ route('studio', $item->slug)}}" title="{{ $item->title}}"
                        class=" py-15 bb-1 b-gray1 colored-hover d-flex align-items-center justify-content-between">
                        <span class="fs-inherit color-inherit"><i class="fas fa-angle-right"></i> {{ $item->title }}</span>
                    </a>
                    @endforeach
                </div>
            </div>  

        </div>
    </div>
</section>

<section id="portfolio-grid" class="pb-60 pt-50 bt-1 b-gray1 b-solid lightbox_gallery">
    <div class="container ">
  
        <div id="portfolio-items" class="">
            @foreach ($Detay->getMedia('gallery') as $item)
            <a href="{{ $item->getUrl() }}" class="cbp-item art photography d-block has-overlay-hover">
                <div class="work-image">
                    <img src="/front/images/image_loader.svg" data-cbp-src="{{ $item->getUrl() }}" 
                   alt="{{ $Detay->title}}">
                    <div class="overlay-hover bg-soft-dark4 d-flex align-items-center justify-content-center scale-hover-container slow">
                        <i class="ti-plus fs-20 white scale-hover"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('customJS')
<script>
    (function($, window, document, undefined) {
        'use strict';
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 3,
            }, {
                width: 640,
                cols: 2,
            }, {
                width: 480,
                cols: 1,
            }],
            filters: '.filter-tags',
            defaultFilter: '*',
            layoutMode: 'masonry',
            gridAdjustment: 'responsive',
            gapHorizontal: 10,
            gapVertical: 10,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 0,
        });


    })(jQuery, window, document);
</script>
    
@endsection