<!DOCTYPE html><html lang="zxx"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','EASYGO')</title>
    <meta content name="description">
    <meta content name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="{{ asset('front/') }}/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('front/') }}/favicon.ico"><!--[if lt IE 9 ]>
<script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->
</head>
<body class="page">
  <style>
    .nav-item.active .nav-link {
  color: red; /* Aktif linkin rengini burada değiştirebilirsiniz */
  font-weight: bold; /* Aktif linkin kalınlığını burada değiştirebilirsiniz */
  /* Diğer stil özelliklerini isteğinize göre ekleyebilirsiniz */
}

  </style>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->
  <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
      
    <!-- ==========================-->
    <!-- SEARCH MODAL-->
    <!-- ==========================-->
    <div class="header-search open-search">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 offset-sm-2 col-10 offset-1">
            <div class="navbar-search">
              <form class="search-global">
                <input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value>
                <button class="search-global__btn"><i class="icon stroke icon-Search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <button class="search-close close" type="button"><i class="fa fa-times"></i></button>
    </div>
    <!-- ==========================-->
    <!-- MOBILE MENU-->
    <!-- ==========================-->
    <div data-off-canvas="mobile-slidebar left overlay">

      <ul class="navbar-nav">
                  <li class="nav-item active"><a class="nav-link" href="home.html">{{__('lang.home')}}</a></li>
                    
                    
                   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
      
                  <li class="nav-item">
                      <a class="nav-link">Inventory</a>
                   <ul class="mobile-sub-menu">
                        <li><a href="inventory-grid.html">Inventory grid</a></li>
                        <li><a href="inventory-listings.html">Inventory listings</a></li>
                       <li><a href="vehicle-details.html">Vehicle details</a></li>
                      </ul>
                  </li>
                    
                    <li class="nav-item">
                      <a class="nav-link ">Reservation</a>
                    <ul class="mobile-sub-menu">
                        <li><a href="reservation-grid.html">Reservation car</a></li>
                        <li><a href="booking-system.html">Reservation service</a></li>
                    </ul>
                  </li>
                    
                    
                  <li class="nav-item"><a class="nav-link">News</a>
                    <ul class="mobile-sub-menu">
                        <li><a href="blog-main.html">Blog main</a></li>
                        <li><a href="blog-grid.html">Blog grid</a></li>
                        <li><a href="blog-post.html">Blog post</a></li>
                      </ul>
                  </li>
                 <li class="nav-item"><a class="nav-link" href="contacts.html">Contact</a></li>
                </ul>

    </div>
 
      
    <header class="header">
      <div class="top-bar">
        <div class="container-fluid">
          <div class="row justify-content-between align-items-center">
            <div class="col-auto">
              <div class="top-bar__item"><i style="font-size: 20px;" class="ic fas fa-map-marker-alt text-primary"></i>
                {{__('lang.call_us')}} 24/7!<a class="top-bar__link" href="tel:+{{ $contact->phone_1 }}"> {{ $contact->phone_1 }}</a>
              </div>
              <div class="top-bar__item"><i style="font-size: 20px;" class="ic fas fa-envelope text-primary"></i> {{__('lang.email')}}<a class="top-bar__link" href="mailto:{{ $contact->email }}"> {{ $contact->email }}</a></div>
              <div class="top-bar__item"><i style="font-size: 20px;"   class="ic fas fa-clock text-primary"></i> {{__('lang.openning_hours')}}
                
                <span class="top-bar__link">  {{ $contact->translate('open_hours') }}</span>
              </div>
            </div>
            <div class="col-auto">
              <ul class="header-soc list-unstyled">
                @if ($contact->wp)
                <li class="header-soc__item"><a class="header-soc__link" href="https://wa.me/{{ $contact->wp }}" target="_blank"><i style="font-size: 22px;" class="ic fab fa-whatsapp"></i></a></li>
                @endif

                @if ($contact->tg)
                <li class="header-soc__item"><a class="header-soc__link" href="{{ $contact->tg }}" target="_blank"><i style="font-size: 22px;" class="ic fab fa-telegram"></i></a></li>
                @endif

                @if ($contact->fb)
                <li class="header-soc__item"><a class="header-soc__link" href="{{ $contact->fb }}" target="_blank"><i style="font-size: 22px;" class="ic fab fa-facebook-f"></i></a></li>
                @endif

                @if($contact->ins)
                <li class="header-soc__item"><a class="header-soc__link" href="{{ $contact->ins }}" target="_blank"><i style="font-size: 22px;" class="ic fab fa-instagram"></i></a></li>
                @endif

                @if($contact->you)
                <li class="header-soc__item"><a class="header-soc__link" href="{{ $contact->you }}" target="_blank"><i style="font-size: 22px;" class="ic fab fa-youtube"></i></a></li>
                @endif                    
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header-main">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto"><a class="navbar-brand navbar-brand_light scroll" href="{{ route('index.'.app()->getLocale()) }}"><img class="normal-logo img-fluid" src="{{ asset('front/') }}/images/logo-light.png" alt="logo"></a><a class="navbar-brand navbar-brand_dark scroll" href="{{ route('index.'.app()->getLocale()) }}"><img class="normal-logo img-fluid" src="{{ asset('front/') }}/images/logo-dark.png" alt="logo"></a></div>
            <div class="col-auto d-xl-none">
              <!-- Mobile Trigger Start-->
              <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
              <!-- Mobile Trigger End-->
            </div>
            <div class="col-xl d-none d-xl-block">
              <nav class="navbar navbar-expand-lg justify-content-end" id="nav">
                <ul class="yamm main-menu navbar-nav">
                  <li  class="nav-item  @if(Route::is('index.' . app()->getLocale())) active @endif"><a style="font-size:13px" class="nav-link" href="{{ route('index.' . app()->getLocale()) }}">{{ __('lang.home') }}</a></li>
                  <li class="nav-item  @if(Route::is('about.' . app()->getLocale())) active @endif "><a style="font-size:13px" class="nav-link" href="{{ route('about.'.app()->getLocale()) }}">{{__('lang.sirket_haqqinda')}}</a></li>
                  <li class="nav-item  @if(Route::is('reservation.' . app()->getLocale())) active @endif"><a style="font-size:13px" class="nav-link" href="{{ route('reservation.'.app()->getLocale()) }}">{{__('lang.reservation')}}</a></li>
                  <li class="nav-item  @if(Route::is('cars.' . app()->getLocale())) active @endif"><a style="font-size:13px" class="nav-link" href="{{ route('cars.'.app()->getLocale()) }}">{{ __('lang.cars') }}</a></li>
                  <li class="nav-item  @if(Route::is('contact.' . app()->getLocale())) active @endif"><a style="font-size:13px" class="nav-link" href="{{ route('contact.'.app()->getLocale()) }}">{{ __('lang.contact') }}</a></li>
                </ul>
                @yield('lang')
              </nav>
            </div>
          </div>
        </div>
      </div>
      
    </header>
    
        <div class="sticky-buttons">
        <div class="sticky-button">
            <a target=_blank href="https://wa.me/{{ $contact->wp }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path d="M30.7538 5.23809C29.0952 3.57116 27.1197 2.2495 24.9425 1.3502C22.7652 0.450888 20.4298 -0.00806418 18.0724 0.000107225C8.19497 0.000107225 0.144724 8.01008 0.144724 17.8381C0.144724 20.988 0.976884 24.048 2.53266 26.748L0 36L9.49749 33.516C12.1206 34.938 15.0693 35.694 18.0724 35.694C27.9497 35.694 36 27.684 36 17.8561C36 13.0861 34.1367 8.60408 30.7538 5.23809ZM18.0724 32.67C15.395 32.67 12.7719 31.95 10.4744 30.6L9.93166 30.276L4.28744 31.752L5.78894 26.28L5.42714 25.722C3.93964 23.3586 3.1498 20.6267 3.14774 17.8381C3.14774 9.66608 9.8412 3.0061 18.0543 3.0061C22.0342 3.0061 25.7789 4.55409 28.5829 7.36209C29.9713 8.73722 31.0716 10.3729 31.82 12.1742C32.5684 13.9756 32.95 15.9069 32.9427 17.8561C32.9789 26.028 26.2854 32.67 18.0724 32.67ZM26.2492 21.582C25.797 21.366 23.5899 20.286 23.192 20.124C22.7759 19.98 22.4864 19.908 22.1789 20.34C21.8714 20.79 21.0211 21.798 20.7678 22.086C20.5146 22.392 20.2432 22.428 19.791 22.194C19.3387 21.978 17.8915 21.492 16.191 19.98C14.8523 18.7921 13.9658 17.3341 13.6945 16.8841C13.4412 16.4341 13.6583 16.2001 13.8935 15.9661C14.0925 15.7681 14.3457 15.4441 14.5628 15.1921C14.7799 14.9401 14.8704 14.7421 15.0151 14.4541C15.1598 14.1481 15.0874 13.8961 14.9789 13.6801C14.8703 13.4641 13.9658 11.2681 13.604 10.3681C13.2422 9.50408 12.8623 9.61208 12.591 9.59408H11.7226C11.4151 9.59408 10.9447 9.70208 10.5286 10.1521C10.1307 10.6021 8.97286 11.6821 8.97286 13.8781C8.97286 16.0741 10.5829 18.1981 10.8 18.4861C11.0171 18.7921 13.9658 23.292 18.4523 25.218C19.5196 25.686 20.3518 25.956 21.003 26.154C22.0703 26.496 23.0472 26.442 23.8251 26.334C24.6935 26.208 26.4844 25.254 26.8462 24.21C27.2261 23.166 27.2261 22.284 27.0995 22.086C26.9729 21.888 26.7015 21.798 26.2492 21.582Z" fill="#FF7A00"/>
                </svg>
            </a>
        </div>
        <div class="sticky-button">
            <a href="tel:{{str_replace(' ','',$contact->phone_1)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path d="M22.76 1C29.56 1 35 6.44 35 13.24M22.76 7.8C25.48 7.8 28.2 10.52 28.2 13.24M1 1C1 24.12 11.88 35 35 35V24.12L25.48 21.4L22.76 25.48C17.32 25.48 10.52 18.68 10.52 13.24L14.6 10.52L11.88 1H1Z" stroke="#FF912B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="sticky-button to-top">
            <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="17" viewBox="0 0 37 17" fill="none">
                <path d="M34.646 14.5625L20.5236 2.45756C19.5031 1.58286 17.9972 1.58286 16.9768 2.45756L2.85433 14.5625" stroke="#FF7A00" stroke-width="3" stroke-miterlimit="16" stroke-linecap="square"/>
                </svg>
            </a>
        </div>
    </div>
    <!-- end .header-->