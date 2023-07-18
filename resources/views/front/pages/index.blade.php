@extends('front.layouts.master')

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')
<style>
  .card-header h5.mb-0 {
    display: flex;
    align-items: center;
  }
</style>

  <div class="b-main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="920px" data-slider-arrows="true" data-slider-buttons="false">
  <div class="sp-slides">
    @foreach ($sliders as $item)
    <!-- Slide 2-->
    <div class="b-main-slider__slide sp-slide text-center">
      <img class="sp-image" src="{{ asset('front/') }}/images/bg-2.jpg" alt="slider">
      <div class="container">
        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
          <div class="b-main-slider__slogan b-main-slider__slogan_2"></div>
          <div class="b-main-slider__title b-main-slider__title_2">{{ $item->translate('title') }}</div>
          <div class="b-main-slider__label text-secondary">{{ $item->link }} AZN / {{__('lang.gunu')}}</div>
        </div>
        <div  class="b-main-slider__wrap-figure sp-layer" data-width="100%" data-show-transition="down" data-hide-transition="top" data-show-duration="1500" data-show-delay="800" data-hide-delay="400">
          <img style="max-width:72%" class="b-main-slider__figure-2 mx-auto img-fluid" src="{{ asset($item->img) }}" alt="foto">
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

  <!-- end .b-main-slider-->
  
  <div class="b-main-filter bg-dark">
    <div class="ui-decor ui-decor_mirror bg-primary"></div>
    <div class="container">
      <div class="b-main-filter__wrap text-center">
        <div class="b-main-filter__logo"><img class="img-fluid" src="{{ asset('front/') }}/images/logo-sm.png" alt="decor"></div><span class="b-main-filter__decor"></span>
        <h2 class="ui-title ui-title_lg ui-title_light text-uppercase">{{ __('lang.xeyal_avto') }}</h2>
        <div class="ui-title-logo ui-title-logo_dark">EASYGO</div>
        <form class="b-main-filter__form">
          <div class="b-main-filter__cat " >
            <a style="text-decoration: none" href="{{ route('cars.'.app()->getLocale()) }}?class=1">
              <label class="btn b-main-filter__cat-item">
                <span class="ic flaticon-sedan-car-model"></span> 
              {{ __('lang.ekonom') }}
              </label>
            </a>
           
          <a style="text-decoration: none" href="{{ route('cars.'.app()->getLocale()) }}?class=2">
            <label class="btn b-main-filter__cat-item">
            <span class="ic flaticon-coupe-car"></span>
            {{ (__('lang.biznes')) }}
            </label>
          </a>
          <a style="text-decoration: none" href="{{ route('cars.'.app()->getLocale()) }}?class=3">
            <label class="btn b-main-filter__cat-item">
              <span class="ic flaticon-car-black-side-view-pointing-left"></span>
              {{ __('lang.premium') }}
            </label>
          </a>
           
          <a style="text-decoration: none" href="{{ route('cars.'.app()->getLocale()) }}?class=5">
            <label class="btn b-main-filter__cat-item">
              <span class="ic flaticon-car-suv"></span> 
              {{ __('lang.Crossovers_SUVs') }}
            </label>
          </a>
           
            <a style="text-decoration: none" href="{{ route('cars.'.app()->getLocale()) }}?class=4">
            <label class="btn b-main-filter__cat-item">
            <span class="ic flaticon-car"></span> 
            {{ __('lang.Busses_Minivans') }}
            </label>
          </a>


          </div>
          <ul class="b-main-filter-nav nav nav-tabs" id="findTab" role="tablist">
            
          </ul>
        
        </form>
      </div>
    </div>
  </div>
  <div class="b-services">
    <div class="ui-decor bg-primary"></div>
    <div class="container">
      <div class="row flex-lg-row-reverse">
        <div class="col-lg-6">
          <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @foreach ($galeries as $key=>$item)
              <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="@if($key==0) active @endif"></li>
              @endforeach
            </ol>
            <div class="carousel-inner">
              @foreach ($galeries as $key=>$item)
              <div class="carousel-item @if($key==0) active @endif">
                <img class="d-block w-100 " height="400vh" src="{{ asset($item->img) }}" alt="First slide">
              </div>
              @endforeach
             
             
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>            
        </div>
        <div class="col-lg-6">
          <div class="b-services-content tab-content" id="servicesTabContent">
            <section class="b-services-content__section tab-pane fade show active" id="services1" role="tabpanel" aria-labelledby="services1-tab">
              <div class="text-center d-inline-block">
                <div class="ui-title-logo">EASYGO</div>
                <h2 class="ui-title mb-3">{{ $about->translate('name') }}</h2>
              </div>
              <div class="b-services-content__main">
                <p>{!! $about->translate('desc') !!}</p>
                <div class="b-phone"><i class="ic icon-call-end"></i>{{__('lang.call_us')}} <a class="b-phone__number" href="tel:{{ str_replace(' ', '' ,$contact->phone_1) }}">{{ $contact->phone_1 }}</a></div>
              </div>
            </section>
            <section class="b-services-content__section tab-pane fade" id="services2" role="tabpanel" aria-labelledby="services2-tab">
              <div class="text-center d-inline-block">
                <div class="ui-title-logo">AUTLINES</div>
                <h2 class="ui-title mb-3">We’re Trusted By Thousands</h2>
              </div>
              <div class="b-services-content__main">
                <p>Non proident sunt ind culpa qudesa officia deserunt mollit anim est laboru unde omnis iste natus error sit voluptatem.</p>
                <h3 class="b-services-content__subtitle text-primary">Book your free Auto Inspection</h3>
                <p>Excepteur sint occaecat cupidatat non proident sunt ind culpa qudesa officia deserunt mollit anim est laboru unde omnis iste natus.</p>
                <div class="b-phone"><i class="ic icon-call-end"></i> Call Us For Booking<a class="b-phone__number" href="tel:+17553028549">+1 (755) 302-8549</a></div>
                <!-- end .b-phone-->
                
              </div>
            </section>
            <section class="b-services-content__section tab-pane fade" id="services3" role="tabpanel" aria-labelledby="services3-tab">
              <div class="text-center d-inline-block">
                <div class="ui-title-logo">AUTLINES</div>
                <h2 class="ui-title mb-3">Vehicle Service & Maintainance</h2>
              </div>
              <div class="b-services-content__main">
                <p>Non proident sunt ind culpa qudesa officia deserunt mollit anim est laboru unde omnis iste natus error sit voluptatem.</p>
                <p>Eorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderits vol dolore fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                <h3 class="b-services-content__subtitle text-primary">Book your free Auto Inspection</h3>
                <p>Excepteur sint occaecat cupidatat non proident sunt ind culpa qudesa officia deserunt mollit anim est laboru unde omnis iste natus.</p>
                <div class="b-phone"><i class="ic icon-call-end"></i> Call Us For Booking<a class="b-phone__number" href="tel:+17553028549">+1 (755) 302-8549</a></div>
                <!-- end .b-phone-->
                
              </div>
            </section>
            <section class="b-services-content__section tab-pane fade" id="services4" role="tabpanel" aria-labelledby="services4-tab">
              <div class="text-center d-inline-block">
                <div class="ui-title-logo">AUTLINES</div>
                <h2 class="ui-title mb-3">Why Choose Us</h2>
              </div>
              <div class="b-services-content__main">
                <p>Eorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderits vol dolore fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                <p>Non proident sunt ind culpa qudesa officia deserunt mollit anim est laboru unde omnis iste natus error sit voluptatem.</p>
                <div class="b-phone"><i class="ic icon-call-end"></i> Call Us For Booking<a class="b-phone__number" href="tel:+17553028549">+1 (755) 302-8549</a></div>
                <!-- end .b-phone-->
                
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end .b-services-->
  
  <section class="section-goods">
    <div class="section-default section-goods__inner bg-dark">
      <div class="ui-decor ui-decor_mirror ui-decor_center"></div>
      <div class="container">
        <div class="text-center">
          <div class="ui-title-logo ui-title-logo_dark">EASYGO</div>
          <h2 class="ui-title ui-title_light text-uppercase">{{ __('lang.icare_masinlari') }}</h2>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <p>{{ __('lang.icare_masinlari_desc') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-goods__list">
        <div class="row">
          @foreach ($cars as $item)
          <div class="col-xl-3 col-md-6">
            <div class="b-goods"><a class="b-goods__img" href="{{ route('car_single.'.app()->getLocale(),[$item->id,$item->slug]) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo">
              <span class="b-goods__label b-goods__label_blue">
                @if ($item->class==1)
                    {{ __('lang.ekonom') }}
                @elseif($item->class==2)
                {{ __('lang.biznes') }}

                @elseif($item->class==3)
                {{ __('lang.premium') }}

                @elseif($item->class==4)
                {{ __('lang.Busses_Minivans') }}

                @else
                {{ __('lang.Crossovers_SUVs') }}

                @endif   
                </span></a>
              <div class="b-goods__main">
                <div class="row no-gutters">
                  <div class="col"><a class="b-goods__title" href="{{ route('car_single.'.app()->getLocale(),[$item->id,$item->slug]) }}"> {{ $item->brend }} {{ $item->model }}  {{ $item->year }}</a>
                    <div class="b-goods__info"></div>
                  </div>
                  <div class="col-auto">
                    <div class="b-goods__price text-primary"><span class="b-goods__price-title"><br>PRICE</span><span class="b-goods__price-number">{{ $item->price }} / AZN</span></div>
                    <div class="b-goods__price-msrp"></div>
                  </div>
                </div>
                <div class="b-goods-descrip row no-gutters">
                  <div class="b-goods-descrip__item col">
                    <div class="b-goods-descrip__inner">
                      <div class="b-goods-descrip__wrap"><i class="ic flaticon-speedometer"></i><span class="b-goods-descrip__info">{{ $item->muherrik }} L</span>
                      </div>
                    </div>
                  </div>
                  <div class="b-goods-descrip__item col">
                    <div class="b-goods-descrip__inner">
                      <div class="b-goods-descrip__wrap"><i class="ic flaticon-fuel-station-pump"></i><span class="b-goods-descrip__info">
                        @if ($item->yanacaq==1) {{ __('lang.benzin') }}
                         @elseif($item->yanacaq==2) {{ __('lang.hobrid') }} 
                         @else {{ __('lang.dizel') }}
                          
                      @endif</span>
                      </div>
                    </div>
                  </div>
                  <div class="b-goods-descrip__item col">
                    <div class="b-goods-descrip__inner">
                      <div class="b-goods-descrip__wrap"><i class="ic flaticon-gearshift"></i><span class="b-goods-descrip__info"> 
                      @if ($item->trans==1)
                      {{ __('lang.avtomatik') }}
                      @else
                      {{ __('lang.mexanik') }}
                      @endif</span>
                        <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">TRANSMISSION</span><span class="b-goods-descrip__text">AUTOMATIC</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="b-goods-descrip__item b-goods-descrip__item_list col">
                    <div class="b-goods-descrip__inner">
                      <div class="b-goods-descrip__wrap"><i class="ic flaticon-calendar"></i>
                        <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">YEAR</span><span class="b-goods-descrip__text">2016</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-goods__footer">
                  <div class="row no-gutters justify-content-between">
                    <div class="col-auto"><span class="b-goods__tag">test drive</span><span class="b-goods__tag">compare</span><span class="b-goods__tag">share this</span></div>
                    <div class="col-auto"><img class="b-goods__bnr" src="{{ asset('front/') }}/images/check.jpg" alt="photo"><img class="b-goods__bnr" src="{{ asset('front/') }}/images/check-2.jpg" alt="photo"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
        <div class="text-center mt-3"><a class="btn btn-secondary" href="{{ route('cars.'.app()->getLocale()) }}">{{ __('lang.show_more') }}</a></div>
      </div>
    </div>
  </section>

  <section class="section-progress bg-dark">
    <div class="container-fluid">
      <div class="section-progress__inner">
        <div class="section-progress__img"><img class="img-scale" src="{{ asset('front/') }}/images/fig-1.png" alt="photo"></div>
        <div class="b-progress-list">
          <div class="row">
            <div class="b-progress-list__item col-md-6"><span class="b-progress-list__percent js-chart" data-percent="{{ $about->year }}"><span class="js-percent"></span>+</span><span class="b-progress-list__name">İl təcrübə</span></div>
            <div class="b-progress-list__item col-md-6 text-right"><span class="b-progress-list__percent js-chart" data-percent="{{ $about->car_number }}"><span class="js-percent"></span>+</span><span class="b-progress-list__name">İcarə maşın</span></div>
            <div class="b-progress-list__item col-md-6"><span class="b-progress-list__percent js-chart" data-percent="{{ $about->client }}"><span class="js-percent"></span>%</span><span class="b-progress-list__name">Müştərİ məmnunİyyətİ</span></div>
            </div>
        </div>
        <div class="section-progress__img ml-4"><img class="img-scale" src="{{ asset('front/') }}/images/fig-2.png" alt="photo"></div>
      </div>
    </div>
  </section>
 

  <section class="section-gallery">
    <div class="container">
      <div class="text-center">
        <div class="ui-title-logo">EASYGO</div>
        <h2 class="ui-title">{{ __('lang.galery') }}</h2>
      </div>
    </div>
    <div class="ui-gallery js-zoom-gallery">  
      <div class="row no-gutters">
        @foreach ($galeries as $key=>$item)
        @if($key==0)
        <div class="col-lg-3 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @elseif($key==1)
        <div class="col-lg-3 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @elseif($key==2)
        <div class="col-lg-2 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @elseif($key==3)
        <div class="col-lg-4 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @else
            
        @endif
        @endforeach
      </div>
   
      <div class="row no-gutters">
        @foreach ($galeries as $key=>$item)    
        @if($key==4)
                    <div class="col-lg-5 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @elseif($key==5)
        <div class="col-lg-2 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @elseif($key==6)
        <div class="col-lg-3 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @elseif($key==7)
        <div class="col-lg-2 col-sm-6"><a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset($item->img) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo"></a></div>
        @endif   
        
        @endforeach
      </div>

    </div>
  </section>
  <section class="section-area">
    <div class="container">
      <div class="text-center">
        <div class="ui-title-logo">EASYGO</div>
        <h2 class="ui-title">{{ __('lang.arenda_masin_ustunlukleri') }}</h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="b-stages">
        <div class="row no-gutters align-items-start">
          <div class="b-stages__item col-lg-3"><span class="b-stages__number">01</span>
            <div class="b-stages__title text-primary">
              {{ __('lang.xidmet_movcuddur') }}</div>
            <div class="b-stages__info">{{ __('lang.xidmet_movcuddur_desc') }}</div>
          </div>
          <div class="b-stages__item col-lg-3 d-flex-lg flex-lg-column-reverse"><span class="b-stages__number">02</span>
            <div class="b-stages__inner">
              <div class="b-stages__title text-primary">{{ __('lang.mun_qiy') }}</div>
              <div class="b-stages__info">{{ __('lang.mun_qiy_desc') }}</div>
            </div>
          </div>
          <div class="b-stages__item col-lg-3"><span class="b-stages__number">03</span>
            <div class="b-stages__title text-primary">{{ __('lang.catdirilma') }}</div>
            <div class="b-stages__info">{{ __('lang.catdirilma_desc') }}</div>
          </div>
          <div class="b-stages__item col-lg-3 d-flex-lg flex-lg-column-reverse"><span class="b-stages__number">04</span>
            <div class="b-stages__inner">
              <div class="b-stages__title text-primary">{{ __('lang.sigorta') }}</div>
              <div class="b-stages__info">{{ __('lang.sigorta_desc') }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end .b-stages-->
  
  <div  class="section-bnr-2">
    <div class="row mb-5">
      <div class="col-lg-6 pb-3">
        <div class="pr-3"><img class="img-fluid" src="{{ asset('front/images/3.jpg') }}" alt="photo"></div>
      </div>
      <div class="col-lg-5 pl-4 pb-3">
        <h2 class="entry-title-inner">{{ __('lang.niye_biz') }}</h2>
        <p>
          {!! $about->translate('niye_biz') !!}
        </p>
        
        <div class="b-phone"><i class="ic icon-call-end"></i> {{ __('lang.call_us') }}<a class="b-phone__number" href="tel:+{{ str_replace(' ' ,'' ,$contact->phone_1) }}">{{ $contact->phone_1 }}</a></div>
        <!-- end .b-phone-->
        
      </div>
    </div>
  </div>
  <!-- end .b-bnr-2-->
  <div style=" display: flex;justify-content: center;" class="col-md-12">
    <h1> {{ __('lang.en_cox_verilen_suallar') }} </h1>
  
  </div>
  <div  class="container">
  <div class="section-goods__list">
  <div style="margin-top: 110px;" id="accordion">

  <div id="accordion">
    @foreach ($questions as $index => $item)
    <div class="card">
      <div class="card-header" id="heading{{ $index }}">
        <h5 style=" display: flex;
        align-items: center" class="mb-0">
          <button style="  border: none;
          padding: 12px;
          font-size: 16px;
          font-family: Montserat, sans-serif;
          text-transform: none;
          white-space: normal;
          word-wrap: break-word;" class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
            <i class="fas fa-chevron-right mr-2"></i> {{ $item->translate('title') }}
          </button>
        </h5>
      </div>
  
      <div id="collapse{{ $index }}" class="collapse" aria-labelledby="heading{{ $index }}" data-parent="#accordion">
        <div class="card-body">
          {{ $item->translate('desc') }}
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
    
  </div> </div>
</div>
  
  <section class="section-bnr section-default bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-xl-10 offset-xl-1">
          <div class="b-bnr text-center">
            <h2 class="b-bnr__title">{{ __('lang.sualiniz_varsa') }}</h2>
            <p>{{ __('lang.sualiniz_varsa_desc') }}</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="b-bnr-contacts row align-items-center">
            <div style="padding: 15px;" class="col-md-6">
              <div class="b-bnr-contacts__item"><i class="ic fas fa-phone-square text-secondary"></i>
                {{ __('lang.call_us') }}
                
                <a class="b-bnr-contacts__link" href="tel:{{ str_replace(' ','',$contact->phone_1) }}">{{ $contact->phone_1 }}</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="b-bnr-contacts__item"><i class="ic far fa-envelope text-secondary"></i>
                {{ __('lang.email') }}
                
                <a class="b-bnr-contacts__link" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
@endsection