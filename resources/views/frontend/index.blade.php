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

<style>
    /* Rotate Boxes */
    .rotate-container{ height: auto; -webkit-perspective: 1000px; -moz-perspective: 1000px; -o-perspective: 1000px; perspective: 1000px; }
    .rotate-box .front, .back{ width: 100%; height: 100%; }
    .rotate-box{ width: 100%; height: 300px; position: relative; -webkit-transition: 0.6s; -webkit-transform-style: preserve-3d; -moz-transition: 0.6s; -moz-transform-style: preserve-3d; -o-transition: 0.8s; -o-transform-style: preserve-3d; transition: 0.8s; transform-style: preserve-3d; -webkit-perspective: 1000px; -moz-perspective: 1000px; -o-perspective: 1000px; perspective: 1000px; pointer-events: none; }
    .rotate-box .front, .rotate-box .back{ -webkit-backface-visibility: hidden; -moz-backface-visibility: hidden; -o-backface-visibility: hidden; backface-visibility: hidden; position: absolute; top: 0; left: 0; perspective: inherit; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; }
    .rotate-box .front{ z-index: 2; }
    .rotate-box .back{ -webkit-transform: rotateY(180deg); -moz-transform: rotateY(180deg); -o-transform: rotateY(180deg); transform: rotateY(180deg); }
    .rotate-box .box-details{ -webkit-transform: translate3d(0,-50%,75px) scale(.85) translateZ(0); -moz-transform: translate3d(0,-50%,75px) scale(.85) translateZ(0); -o-transform: translate3d(0,-50%,75px) scale(.85) translateZ(0); transform: translate3d(0,-50%,75px) scale(.85) translateZ(0); display: block; -webkit-transform-style: preserve-3d; transform-style: preserve-3d; perspective: inherit; top:50%; position: relative; text-align: center; width: 100%; backface-visibility: hidden; -webkit-font-smoothing: subpixel-antialiased; }
    /* Hovers */
    .rotate-container:hover .rotate-box, .rotate-container.hover .rotate-box{ -webkit-transform: rotateY(180deg); -moz-transform: rotateY(180deg); -o-transform: rotateY(180deg); transform: rotateY(180deg); }
    .rotate-container.hover1:hover .rotate-box, .rotate-container.hover1.hover .rotate-box{ -webkit-transform: rotateY(-180deg); -moz-transform: rotateY(-180deg); -o-transform: rotateY(-180deg); transform: rotateY(-180deg); }
    .rotate-container.hover2:hover .rotate-box, .rotate-container.hover2.hover .rotate-box{ -webkit-transform: rotateX(180deg); -moz-transform: rotateX(180deg); -o-transform: rotateX(180deg); transform: rotateX(180deg); }
    .rotate-container.hover3:hover .rotate-box, .rotate-container.hover3.hover .rotate-box{ -webkit-transform: rotateX(-180deg); -moz-transform: rotateX(-180deg); -o-transform: rotateX(-180deg); transform: rotateX(-180deg); }
    /* Set the rotate for hover2 and 3 */
    .rotate-container.hover2 .back, .rotate-container.hover3 .back{ -webkit-transform: rotateX(-180deg); -moz-transform: rotateX(-180deg); -o-transform: rotateX(-180deg); transform: rotateX(-180deg); }
</style>

@endsection

@section('content')

@include('frontend.app.slider')   

<div class="container mt-40 mb-40">
    <div class="row">
        <div class="col">
            <h6 class="colored fs-11 ls-6 uppercase  t-center">Yolo Studio Hoş Geldiniz</h6>
            <h1 class="lh-40 font-sedgwick mt-10  t-center">İzmir Karşıyaka'da Yenilikçi Fitness Deneyimi: Yolo Fitness</h1>
            <p class="light fs-20 gray7 lh-35 mt-30">
               {!!$About->short!!}
            </p>
        </div>
    </div>
</div>

<section id="blog" class="blog bb-1 b-gray2 post-radius post-shadow lh-lg py-50">
    <div class="t-center">


        <div class="col t-center">
            <h2 class="lh-45 mt-10 uppercase animate" data-animation="fadeInDown" data-animation-delay="500">Stüdyolarımız</h2>
            <p class="light gray6 lh-30 fs-18 animate" data-animation="fadeInDown" data-animation-delay="500">Karşıyaka <b class="font-bold">YOLO Fitness </b>stüdyolarını aşağıdan inceleyebilirsiniz.</p>
        </div>
       
    </div>
    <div class="container mt-50">
        <div id="blog-posts" class="blog-posts grid">
            @foreach ($Service->where('category', 2) as $item)
            <figure id="post_0{{ $item->id}}" class="post cbp-item"  style="width: 32%; left: 0px; top: 0px;">
                <div class="cbp-item-wrapper">
                    <figcaption>
                        <div class="cbp-caption">
                            <a href="{{ route('studio', $item->slug)}}" class="cbp-caption-defaultWrap">
                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/front/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb')}}" alt="Karşıyaka {{ $item->title}} - Karşıyaka Yolo Studio">
                            </a>
                        </div>

                        <a href="{{ route('studio', $item->slug)}}" class="post-details" alt="{{ $item->title}}">

                            <h4 class="post-title">
                                {{ $item->title}}
                            </h4>
                          
                            <p class="post-message ikisatir">
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

<div class="container mt-30 mb-30">
    <div class="row b-1 b-gray1 b-solid mx-0 py-60 bg-gradient2 relative d-flex align-items-center justify-content-center">
       <div class="col-lg-8 col-12 pl-50 pr-0 px-30-sm py-15">
          <h4 class="fs-24 white lh-35 light"> İzmir Karşıyaka'da Yenilikçi Fitness Deneyimi: Yolo Fitness </h4>
       </div>
       <div class="col-lg-3 offset-lg-1 col-12 pl-30-sm py-15">
          <a href="#" class="lg-btn bg-white bs-lg-hover hover-cursor fs-11 bold uppercase slow-sm" data-color="#706B8B" style="color: rgb(112, 107, 139);">
            <span class="cursor-container">
                <span class="cursor">
                    <span class="c-inner"></span>
                </span>
            </span> İletişime Geç
         </a> 
       </div>
       <div class="absolute width-percent-80 fullwidth-sm left-50 left-0-sm zi-0 bottom-0 fullwidth height-percent-70 pointer-events-none">
          <svg width="100%" height="100%" viewBox="0 0 948 143" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.471439085" opacity="0.100000001">
                <path d="M0,142.142665 C52.2352383,57.0965861 112.235238,10.0497161 180,1.00205483 C281.647143,-12.5694372 480.074219,116.831768 680.226563,80.2973069 C813.661458,55.9409994 902.877604,74.9300983 947.875,137.264604 L0,142.142665 Z" fill="#FFFFFF"></path>
             </g>
          </svg>
       </div>
    </div>
 </div>

 <section id="element-template-05" class="pb-60 bt-1 b-gray1 b-solid">
    <div class="container">
       <div class="t-center">
          <div class="row">
            @foreach ($Course as $item) 
             <div class="col-lg-4 col-12 mt-70">
                <div class="rotate-container">
                   <div class="rotate-box white">
                      <div class="front bg-violet">
                         <div class="box-details">
                            <h4 class="light">{{ $item->title}}</h4>
                            <p class="fs-13 light">Yolo Fitness</p>
                         </div>
                      </div>

                      <div class="back bg-dribbble">
                         <div class="box-details">
                            <div class="fs-18 light">
                               {{ $item->short}}
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
              
                <h5 class="fs-17 black lh-30 light mt-20">{{ $item->title}}</h5>
             </div>
     
             @endforeach
          </div>
       </div>
    </div>
 </section>

 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6096.866657906884!2d27.10888679816783!3d38.46159080444706!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd96e4ed7db9b%3A0xc17d35f9dc8d4e2f!2sYolo%20Fitness!5e0!3m2!1str!2str!4v1711457893962!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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



<script>
    $(".rotate-container").each(function {
        $(body).on('touch touchmove', function{
            $('.rotate-container').removeClass('hover');
        })
        $(this).on('touchstart', function(){
            $(this).toggleClass('hover');
        });
    });
    
</script>
@endsection