@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-25vh mnh-250 align-items-center d-flex" 
data-bg="url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg)" 
data-was-processed="true" 
style="background-image: url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg);">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
                Ahmet Gökşin Güzeltepe
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
                <a href="{{ route('service')}}" title="Hizmetlerimiz"  class="c-default">Hizmetlerimiz</a>
                <i class="ti-angle-right fs-7 mx-15"></i>

                <a href="#" class="stay c-default opacity-7">{{ $Detay->title}}</a>
            </div>

        </div>
    </div>
</section>

<section id="home" class="fullwidth bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12 pt-50">
                <span class="fs-20 fs-16-sm gray7 ls-0 lh-35 light">
                    {!! $Detay->desc !!}
                </span>
            </div>
            <div class="col-md-3 col-12 bg-gray">   
                <div
                    class="fs-15 gray8  lh-lg mb-30  px-15-sm py-50 py-20-sm">
                    <h4 class="fs-17 black">HİZMETLERİMİZ</h4>
                    @foreach ($Service->where('category', 1) as $item)
                    <a
                        href="{{ route('servicedetail', $item->slug)}}" title="{{ $item->title}}"
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
                    width="500" height="500" alt="{{ $Detay->title}}">
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