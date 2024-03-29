
<nav id="navigation" class="modern-nav fixed bordered link-hover-01 hover-dark nav-dark dropdown-radius" data-offset="54">
    <div id="top-bar" class="top-bar visible-lg height-45 bb-1 b-soft-dark1">
        <div class="container">
           <div class="row align-items-center">
              <div class="col d-flex">
                 <p class="fs-14 mr-15">Telefon:<a href="tel:{{config('settings.telefon1')}}<" class="white-hover slow">{{config('settings.telefon1')}}</a></p>
                 <p class="fs-14  mr-15">E-Mail: <a href="mailto:{{config('settings.email1')}}" class="white-hover slow">{{config('settings.email1')}}</a></p>
              </div>
              <div class="col d-flex justify-content-end">
                <a href="{{route('syllabus')}}" class="nav-link fs-14 " title="Instagram">DERS PROGRAMI</a>
                <a href="{{route('hr')}}" class="nav-link fs-14 " title="Instagram">İ.K.</a>
                <a href="https://www.instagram.com/{{ config('settings.instagram')}}" target="_blank" class="nav-link" title="Instagram"><i class="ti-instagram"></i></a>
             </div>
           </div>
        </div>
     </div>

    <div class="container nav-container">
        <div class="row nav-wrapper justify-content-end">
            <div class="col">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/logo.png" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-600">
                    <img src="/logo.png" alt="{{ config('settings.img_alt')}}" class="logo-white mxw-100">
               </a>
            </div>
            <div class="col ml-auto nav-menu">
                <ul class="nav-links justify-content-end">
                    <li class="logo-for-mobile-navigation"><img src="images/logos/logo_03_dark.svg" alt="{{ config('settings.img_alt')}}"  class="logo-white mxw-100"></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('corporatedetail','hakkimizda')}}" class="nav-link">Hakkımızda</a></li>
                    <li class="dd-toggle"> <a href="#" class="nav-link">Derslerimiz</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Course as $item) 
                                <li><a href="{{ route('service', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                            @endforeach
                        </ul> 
                    </li>
                    <li class="dd-toggle"> <a href="#" class="nav-link">Stüdyolarımız</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Service->where('category', 2) as $item)
                                <li><a href="{{ route('studio', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                            @endforeach
                        </ul> 
                    </li>
                    <li><a href="{{ route('campaigns')}}" class="nav-link">Kampanyalar</a></li>
                    <li><a href="{{ route('team')}}" class="nav-link">Eğitmenler</a></li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>
                </ul>
            </div>
            <div class="d-none d-lg-block nav-menu">
                <ul class="nav-links justify-content-end">
                    <li class="extra-links">
                        <div class="bracket"></div>
                          <a href="{{ route('pre-registration')}}" class="nav-button white bg-colored fs-12 uppercase bold slow" title="ÖN KAYIT FORMU">
                            <span>ÖN KAYIT</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-nb">
                <div class="hamburger-menu">
                    <div class="top-bun"></div>
                    <div class="meat"></div>
                    <div class="bottom-bun"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-bg"></div>
</nav>
