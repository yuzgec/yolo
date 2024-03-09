@extends('frontend.app.master')
@section('customCSS')
<style>
    .cbp-item .work-image{-webkit-transform:scale(1);transform:scale(1); -webkit-transition:transform 0.5s;transition:transform 0.5s;}
    .cbp-item:hover .work-image{-webkit-transform:scale(1.03);transform:scale(1.03);}
    .cbp-item .details{opacity:0;-webkit-transform:scale(1.04) perspective(1000px);transform:scale(1.04) perspective(1000px);-webkit-transition:all 0.5s;transition:all 0.5s;}
    .cbp-item:hover .details{opacity:1;-webkit-transform:scale(1) perspective(1000px);transform:scale(1) perspective(1000px);}
    .cbp-item .details .title, .cbp-item .details .tag{opacity:0;-webkit-transform:translateY(15px);transform:translateY(15px);-webkit-transition:all 0.5s;transition:all 0.5s;}
    .cbp-item:hover .details .title, .cbp-item:hover .details .tag{opacity:1;-webkit-transform:translateY(0px);transform:translateY(0px);}
    .cbp-item:hover .details .tag{-webkit-transition-delay:0.1s;transition-delay:0.1s;}
    .cbp-item .details .line{-webkit-transition:all 0.3s;transition:all 0.3s;}
    .cbp-item:hover .details .line{width:70px!important;}
    .dots-circle .cbp-nav-pagination{bottom:-60px;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item{width:25px;height:25px;background-color:transparent;border-radius:50%;display:inline-flex;display:-ms-inline-flexbox;justify-content:center;-ms-flex-pack:center;align-items:center;-ms-flex-align:center;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item:before{width:5px;height:5px;background-color:#222;box-shadow:inset 0 0 0 0.5px transparent;-webkit-transform:scale(1);transform:scale(1);content:'';display: block;border-radius:inherit;-webkit-transition:all 0.5s;transition:all 0.5s;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item.cbp-nav-pagination-active:before{box-shadow:inset 0 0 0 0.5px #222;background-color:transparent!important;-webkit-transform:scale(3);transform:scale(3);}
    .cbp-nav-controls{position:absolute;left:0;top:0;z-index:100;width:100%;height:100%;pointer-events:none;}
    .cbp-nav-controls div{font-size:20px;color:white;border-radius:0;background:rgba(24,24,24,0.3);position:absolute;top:50%;width:40px;height:90px;left:0;opacity:0;z-index:5;cursor:pointer;pointer-events:all;display:inline-flex;display:-ms-inline-flexbox;justify-content:center;-ms-flex-pack:center;align-items:center;-ms-flex-align:center;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s;}
    .cbp:hover .cbp-nav-controls div{opacity:.55;}
    .cbp-nav-controls div.cbp-nav-next{left:auto;right:1px;}
    .cbp-nav-controls div:before,.cbp-nav-controls div:after{content:"\e64a";display:inline-flex;display:-ms-inline-flexbox;z-index:2;font-family:'themify';color:inherit;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s;}
    .cbp-nav-controls div:after{display:none;content:'';z-index:0;}
    .cbp:hover .cbp-nav-controls div:hover{opacity:1;}
    .cbp-nav-controls div.cbp-nav-next:before{content:"\e649";}
</style>
@endsection

@section('content')

@include('frontend.app.slider')   

<div class="container mt-40 mb-40">
    <div class="row">
        <div class="col t-center">
            <h6 class="colored fs-11 ls-6 uppercase">Yolo Studio Hoş Geldiniz</h6>
            <h1 class="lh-40 font-sedgwick mt-10">You can't succeed by waiting. Now run with all your strength!</h1>
            <p class="t-center light fs-20 gray7 lh-35 mt-30">
                Vivamus viverra felis eget ex ultricies feugiat. Mauris placerat orci in fermentum eleifend.
            </p>
        </div>
    </div>
</div>

<section id="blog" class="blog bb-1 b-gray2 post-radius post-shadow lh-lg py-50">
    <div class="t-center">
        <h1 class="fs-36 fs-30-sm lh-sm medium dark animate" data-animation="fadeInDown" data-animation-delay="500">We blog to perfection</h1>
        <h1 class="fs-36 fs-30-sm lh-sm medium dark animate" data-animation="fadeInDown" data-animation-delay="500">Reading enjoyment guaranteed</h1>
        <p class="fs-18 lh-35 gray7 mt-30 mt-10-sm mxw-700 d-inline-flex animate" data-animation="fadeInDown" data-animation-delay="700">
            Growing bleeding edge to, consequently, be transparent. Creating user stories and demographics. Good Design Matters
        </p>
    </div>
    <div class="container mt-50">
        <div id="blog-posts" class="blog-posts grid">
            @foreach ($Service->where('category', 2) as $item)
            <figure id="post_0{{ $item->id}}" class="post cbp-item"  style="width: 32%; left: 0px; top: 0px;">
                <div class="cbp-item-wrapper">
                    <figcaption>
                        <div class="cbp-caption">
                            <a href="{{ route('servicedetail', $item->slug)}}" class="cbp-caption-defaultWrap">
                                <img src="https://img-macfit.mncdn.com//wp-content/uploads/2022/07/rsz_1nuspa_yoga_secilen.jpg" alt="{{ $item->title}} - Karşıyaka Yolo Studio">
                            </a>
                            <a href="{{ $item->getFirstMediaUrl('page', 'page') }}" class="lightbox post-lightbox">
                                <i class="ti-zoom-in"></i>
                            </a>
                        </div>

                        <a href="{{ route('servicedetail', $item->slug)}}" class="post-details" alt="{{ $item->title}}">

                            <h4 class="post-title">
                                {{ $item->title}}
                            </h4>
                          
                            <p class="post-message">
                                Vivamus viverra felis eget ex ultricies eget ex ultricies viverra feugiat.
                                {{ $item->short }}
                            </p>

                        </a>
                    </figcaption>
                </div>
            </figure>
            @endforeach
        </div>
    </div>
</section>    

@endsection
@section('customJS')
<script src="/front/js/revolutionslider/jquery.themepunch.revolution.min.js"></script>
<script src="/front/js/revolutionslider/jquery.themepunch.tools.min.js"></script>
<script>

    var tpj=jQuery;
    var revapi1014;
    tpj(document).ready(function() {
    if(tpj("#rev_slider_1014_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_1014_1");
    }else{
    revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
        sliderType:"standard",
    jsFileLocation:"revolution/js/",
        sliderLayout:"fullwidth",
        dottedOverlay:"none",
        delay:9000,
        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
                touchenabled:"on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            }
            ,
            arrows: {
                style:"uranus",
                enable:true,
                hide_onmobile:true,
                hide_under:768,
                hide_onleave:false,
                tmp:'',
                left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                },
                right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                }
            }
        },
        responsiveLevels:[1240,1024,778,480],
        visibilityLevels:[1240,1024,778,480],
        gridwidth:[1240,1024,778,480],
        gridheight:[868,768,960,600],
        lazyType:"none",
        shadow:0,
        spinner:"off",
        stopLoop:"on",
        stopAfterLoops:0,
        stopAtSlide:1,
        shuffle:"off",
        autoHeight:"off",
        fullScreenAutoWidth:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "0px",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
        }
    });
    }

    RsTypewriterAddOn(tpj, revapi1014);
    });

</script>

<script>
    $(document).ready(function(){
        "use strict";
        $('#filtered-slider').on('init', function(event, slick){
            $(".filter-button").each(function(){
                var filterName = $('.filter-button').attr('data-category');
                $("#filtered-slider").find('.' + filterName).parents(".slick-slide").addClass(filterName);
            });
        });
        $('#filtered-slider').slick();
        var filtered = false;
        $('.filter-button').on('click', function(){
            var filterClass = $(this).attr('data-category'),
                text = $(this).attr('data-filter-text'), showAllText = $(this).attr("data-show-all-text");
            if (filtered === false) {
                $('#filtered-slider').slick('slickFilter', '.' + filterClass);
                $(this).addClass("active").find(".button-text").html(showAllText);
                filtered = true;
            } else {
                $('#filtered-slider').slick('slickUnfilter');
                $(this).removeClass("active").find(".button-text").html(text);
                filtered = false;
            }
        });
    });
</script>

<script>
    (function($, window, document, undefined) {
        'use strict';
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 5,
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
            gapHorizontal: 0,
            gapVertical: 0,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 0,
        });

        $(".cbp-filter-item-active").addClass("active");
        $("[data-filter]").on("click", function(){
            $("[data-filter]").removeClass("active");
            $(".cbp-filter-item-active").addClass("active");
        });

    })(jQuery, window, document);
</script>
@endsection