@extends('front.layouts.master')
@section('lang')
<li style="display: block;" class="lang-item" >
  <a @if(Request::segment(1)!='en' && Request::segment(1)!='ru') style="color:#AE280B;font-weight: 700;font-size: 21px;" @else style="color:orange;font-weight: 700;font-size: 21px;" @endif href="/icare-masin/{{ $car->id }}/{{ $car->slug }}">
      AZ
  </a>
</li>
<span style="font-size: 20px;
font-weight: 700;">/</span>

<li style="display: block;" class="lang-item">
  <a @if(Request::segment(1)=='en') style="color:#AE280B;font-weight: 700;font-size: 21px;" @else style="color:orange;font-weight: 700;font-size: 21px;" @endif href="/en/rental-car/{{ $car->id }}/{{ $car->slug }}">
      EN
  </a>
</li>
<span style="font-size: 20px;
font-weight: 700;">/</span>
<li  style="display: block;" class="lang-item">
  <a @if(Request::segment(1)=='ru') style="color:#AE280B;font-weight: 700;font-size: 21px;" @else style="color:orange;font-weight: 700;font-size: 21px;" @endif href="/ru/katalog-avtomobile/{{ $car->id }}/{{ $car->slug }}">
      RU
  </a>
</li> 


@endsection
@section('content')
<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
      <div class="container text-center">
        <h1 class="b-title-page">{{ $car->model }}</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index.'.app()->getLocale()) }}">{{ __('lang.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cars.'.app()->getLocale()) }}">{{ __('lang.icare_masinlari') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $car->model }}</li>
          </ol>
        </nav>
        <!-- end .breadcrumb-->
        
      </div>
    </div>
  </div>
  <!-- end .b-title-page-->
  
  <div class="l-main-content">
    <div class="ui-decor ui-decor_sm-h ui-decor_mirror bg-primary"></div>
    <div class="container">
      <section class="b-goods-f">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="ui-title text-uppercase">{{ $car->brend }} {{ $car->model }}</h2>
            <div class="b-goods-f__slider">
              <div class="ui-slider-main js-slider-for">
                @php
                    $images=explode('|',$car->images);
                @endphp
                @foreach ($images as $item)
                <img class="img-scale" src="{{ asset($item) }}" alt="photo">
                @endforeach

            </div>
              <div class="ui-slider-nav js-slider-nav">
                @foreach ($images as $item)
                <img class="img-scale" src="{{ asset($item) }}" alt="photo">

                @endforeach                
            </div>
            </div>
            <h2 class="b-goods-f__title">Vehicle Specifications</h2>
            <div class="row">
              <div class="col-md-6">
                <dl class="b-goods-f__descr row">
                  <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.year') }}</dt>
                  <dd class="b-goods-f__descr-info col-md-7">{{ $car->year }}</dd>
                  <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.brend') }}</dt>
                  <dd class="b-goods-f__descr-info col-md-7">{{ $car->brend }}</dd>
                  <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.model') }}</dt>
                  <dd class="b-goods-f__descr-info col-md-7">{{ $car->model }}</dd>
                
                  <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.yanacaq') }}</dt>
                  <dd class="b-goods-f__descr-info col-md-7">
                    @if ($car->yanacaq==1) {{ __('lang.benzin') }}
                    @elseif($car->yanacaq==2) {{ __('lang.hibrid') }} 
                    @else {{ __('lang.dizel') }}
                    @endif</dd>
                 
                </dl>
              </div>
              <div class="col-md-6">
                <dl class="b-goods-f__descr row">
                  <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.trans') }}</dt>
                  <dd class="b-goods-f__descr-info col-md-7"> 
                    @if ($car->trans==1)
                    {{ __('lang.avtomatik') }}
                    @else
                    {{ __('lang.mexanik') }}
                    @endif  </dd>
                  <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.class') }}</dt>
                  <dd class="b-goods-f__descr-info col-md-7">@if ($car->class==1)
                    {{ __('lang.ekonom') }}
                @elseif($car->class==2)
                {{ __('lang.biznes') }}

                @elseif($car->class==3)
                {{ __('lang.premium') }}

                @elseif($car->class==4)
                {{ __('lang.Busses_Minivans') }}

                @else
                {{ __('lang.Crossovers_SUVs') }}

                @endif  
                <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.muherrik') }}</dt>
                <dd class="b-goods-f__descr-info col-md-7">{{ $car->muherrik }} L</dd>

                <dt class="b-goods-f__descr-title col-md-5">{{ __('lang.price') }}</dt>
                <dd class="b-goods-f__descr-info col-md-7">{{ $car->price }} / AZN</dd>
                </dl>
              </div>
            </div>
           
          </div>
          <div class="col-lg-4">
            <aside class="l-sidebar">
              <div class="b-goods-f-price">
                <div class="b-goods-f-price__header bg-secondary">{{ __('lang.price') }} :<span class="b-goods-f-price__main">{{ $car->price }} / AZN</span></div>
                
              </div>
              <div class="b-seller">
                
                <div class="b-seller__main"><i class="b-seller__ic flaticon-phone-call text-primary"></i>
                  <div class="b-seller__contact"><span class="d-block">{{ __('lang.call_us') }}</span><a class="b-seller__phone" href="tel:{{ str_replace(' ' ,'',$contact->phone_1) }}">{{ $contact->phone_1 }}</a></div>
                  <ul class="b-seller-soc list-unstyled">
                    <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="https://wa.me/+{{ $contact->wp }}" target="_blank"><i class="ic fab fa-whatsapp"></i></a></li>
                    <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="{{ $contact->fb }}" target="_blank"><i class="ic fab fa-facebook-f"></i></a></li>
                    <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="{{ $contact->tg }}" target="_blank"><i class="ic fab fa-telegram"></i></a></li>
                    <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="{{ $contact->ins }}" target="_blank"><i class="ic fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <!-- end .b-seller-->
              
              <div class="widget-2 section-sidebar bg-gray">
                <h3 class="widget-title-2"><img class="ic" src="{{ asset('front/') }}/images/logo-sm_blue.png" alt="photo"><span class="widget-title__inner">{{ __('lang.rezervasiya') }}</span></h3>
                <div class="widget-content">
                  <div class="widget-inner">
                    <form>
                        <div class="form-group">
                            <input class="form-control" disabled readonly name="car" value="{{ $car->brend }} {{ $car->model }}" type="hidden" placeholder="Adınızı daxil edin">
                          </div>
                      <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Adınızı daxil edin">
                      </div>
                      
                      <div class="form-group">
                        <input class="form-control" name="surname" type="text" placeholder="Soyad">
                      </div>

                      <div class="form-group">
                        <input class="form-control" name="phone" type="text" placeholder="Nomrə">
                      </div>
                      <div class="form-group">
                        <label for="">Götürmə tarixi</label>
                        <input class="form-control" name="got_tarixi" type="datetime-local"  required>                      </div>
                      <div class="form-group">
                        <label for="">Qaytarma tarixi</label>
                        <input class="form-control" name="qay_tarixi" type="datetime-local">
                      </div>
                      <button class="btn btn-secondary w-100">İndi Mesaj gonder</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </aside>
          </div>
        </div>
      </section>
      <!-- end .b-goods-f-->
      
    </div>
  </div>
@endsection