@extends('front.layouts.master')
@section('lang')
@include('front.layouts.lang')
@endsection
@section('content')
<div class="section-title-page section-title-page_mod-a area-bg area-bg_dark area-bg_op_60">
    <div class="section-title-page__decor"></div>
    <div class="area-bg__inner">
      <div class="container text-center">
        <h1 class="b-title-page">Get Your Car New Style</h1>
        <div class="b-title-page__subtitle">Choose From Hundreds of styles & colors</div>
        <div class="b-title-page__label text-secondary">Explore Services</div>
      </div>
    </div>
  </div>
  <!-- end .b-title-page-->
  
  <div class="l-main-content">
    <div class="ui-decor ui-decor_up ui-decor_mirror bg-primary"></div>
    <main>
      <section class="section-area mt-5">
        <div class="ui-decor ui-decor_mirror ui-decor_center"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1 text-center pt-4">
              <div class="ui-title-logo">EASYGO</div>
              <h2 class="ui-title mb-4">{{ $about->translate('name') }}</h2>
              <p>{!! $about->translate('desc') !!}</p>
              <div class="d-block">
                <div class="b-phone b-phone_mod-a bg-gray"><i class="ic icon-call-end"></i> {{__('lang.call_us')}}<a class="b-phone__number" href="tel:+{{ str_replace(' ', '' ,$contact->phone_1) }}">{{ $contact->phone_1 }}</a></div>
                <!-- end .b-phone-->
                
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <div style="padding-top: 115px;
      padding-bottom: 77px;"  class="section-bnr-2">
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
    </main>
  </div>
@endsection