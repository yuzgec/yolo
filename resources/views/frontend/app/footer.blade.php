<footer id="footer" class="pt-60 bg-white relative">
    <div class="container">
        <div class="row row-eq-height">

            <div class="col-lg-3 col-sm-6 mt-40 t-left">
                <img src="/logo.png" class="block width-200" alt="Yolo Fitness - Karşıyaka">
            </div>

            <div class="col-lg-3 col-sm-6 mt-40">
                <h5 class="gray9 fs-15">Sayfalar</h5>
                <ul class="list list-lg px-0 gray5 pt-20 fs-16">
                    <li>
                        <a href="{{ route('home')}}" title="Anasayfa" class="white-hover">
                           Anasayfa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('corporatedetail', 'hakkimizda')}}" title="Hakkımızda" class="white-hover">
                           Hakkımızda
                        </a>
                    </li>
                   
                    <li>
                        <a href="{{ route('reference')}}" title="Referanslarımız" class="white-hover">
                           Referanslarımız
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('hr')}}" title="İnsan Kaynakları" class="white-hover">
                           İnsan Kaynakları
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contactus')}}" title="İletişim" class="white-hover">
                           İletişim
                        </a>
                    </li>
                </ul>
            </div>  
            <div class="col-lg-3 col-sm-6 mt-40">
                <h5 class="gray9 fs-15">Stüdyolarımız</h5>
                <ul class="list list-lg px-0 gray5 pt-20 fs-16">
                    @foreach ($Service->where('category', 2) as $item)
                        <li>
                            <a href="{{ route('service', $item->slug)}}" title="{{ $item->title }}" class="white-hover">
                                {{ $item->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>               
            <div
                class="col-lg-3 mt-40 t-right t-left-sm justify-content-lg-end justify-centent-start">
                <h5 class="gray9 fs-15">İletişim Bilgileri</h5>
                <a href="tel:{{ config('settings.telefon1')}}" class="colored-hover fs-28  dark block mt-40">{{ config('settings.telefon1')}}</a>
                <a href="mailto:{{ config('setttings.email1')}}" class="colored-hover fs-28  dark mt-15 block">{{ config('settings.email1')}} </a>
                <div class="mt-30">
                    <a
                        href="{{ config('settings.linkedin')}}"
                        class="icon-xs width-40 height-40 bg-linkedin-hover bg-gray7 white slow-sm ml-10 ml-0-sm mr-10-sm">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a
                        href="{{ config('settings.twitter')}}"
                        class="icon-xs width-40 height-40 bg-twitter-hover bg-gray7 white slow-sm ml-10 ml-0-sm mr-10-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a
                        href="{{ config('settings.facebook')}}"
                        class="icon-xs width-40 height-40 bg-facebook-hover bg-gray7 white slow-sm ml-10 ml-0-sm mr-10-sm">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a
                        href="{{ config('settings.instagram')}}"
                        class="icon-xs width-40 height-40 bg-instagram-hover bg-gray7 white slow-sm ml-10 ml-0-sm mr-10-sm">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 mt-60">
                <div class="fullwidth bt-1 b-solid b-dark"></div>
                <div class="py-30 row align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-lg col-12-sm gray6 fs-16 t-left t-center-sm">© {{ date('Y')}} Karşıyaka Yolo Tüm Hakları Saklıdır.</div>
                    <div class="col-lg col-12-sm mt-5-sm gray6 fs-16 t-right t-center-sm">
                        <a href="#" target="_blank" class="white-hover slow">Privacy Policy</a> |
                        <a href="#" target="_blank" class="white-hover slow">Terms and Condition</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
