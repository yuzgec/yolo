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
                İnsan Kaynakları
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

                <a href="#" class="stay c-default opacity-7">İ.K.</a>
            </div>

        </div>
            </div>
            <div class="col-md-3 t-center d-none d-lg-block">
                <img src="/logo.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
            </div>
        </div>
    </div>
</section>

<section id="home">
    <div class="row mx-0">
        <div class="col-12 o-auto scrollbar-styled height-full height-auto-sm px-0 d-flex align-items-center flex-wrap justify-content-center">
            <div id="contact-form-section" class="t-left width-percent-90 fullwidth-sm pt-50 pb-50 px-70 px-30-sm mxw-900">
                <h5 class="uppercase fs-11 medium ls-3 ls-1-sm" data-color="#000">
                    Karşıyaka YOLO Fitness
                </h5>
                <h4 class="mt-15 bold fs-32 fs-22-sm dark underline-hover-slide underline-slide ls--1 ls-0-sm">
                   <a href="mailto:{{ config('settins.email1')}}">{{ config('settings.email1') }}</a>
                </h4>
                <p class="light fs-22 fs-18-sm gray7 lh-35 lh-25-sm mt-15">
                    Sizde YOLO Fitness ekibine katılmak istiyorsanız aşağıdaki formu doldurun hemen özgeçmişinizi bize gönderin.
                </p>
                <form id="contact_form" class="validate-me mt-40" name="contact_form" method="post" action="php/mail.php" data-error-message="Validation error occured. Please enter the fields and submit it again." data-submit-message="Thank You ! Your email has been delivered.">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="name1" id="name1" placeholder="Adınız Soyadınız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <input type="email" name="email1" id="email1" placeholder="E-Mail Adresiniz*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <input type="email" name="email1" id="email1" placeholder="Telefon Numaranız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>

                        <div class="col-12 mt-20">
                            <textarea name="message1" id="message1" placeholder="Mesajınız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder height-150"></textarea>
                        </div>

                        <div class="col-12 mt-20">
                            <input type="file" name="email1" id="email1" placeholder="Telefon Numaranız*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>

                        <div class="col-12 mt-20 d-flex justify-content-start align-items-center">
                           <button type="submit" id="submit" class="inline-block width-250 py-20 bs-colored white ls-3-hover slow bold fs-14 uppercase"
                            data-bgcolor="#000">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection