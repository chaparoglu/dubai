@extends('front.layouts.master')

@section('title')
{{ __('lang.icare_masinlari') }}
@endsection
@section('lang')
@include('front.layouts.lang')
@endsection
@section('content')
<style>
    .pagination
    {
        padding-left: 306px!important;
    }
</style>
<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
      <div class="container text-center">
        <h1 class="b-title-page">{{ __('lang.icare_masinlari') }}</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index.'.app()->getLocale()) }}">{{ __('lang.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.icare_masinlari') }}</li>
          </ol>
        </nav>
        <!-- end .breadcrumb-->
        
      </div>
    </div>
  </div>
  <!-- end .b-title-page-->
  
  <div class="l-main-content">
    <div class="ui-decor ui-decor_mirror ui-decor_sm-h bg-primary"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-3">
          <aside class="l-sidebar l-sidebar_top_minus">
            <div class="widget section-sidebar bg-gray">
              <h3 class="widget-title row justify-content-between align-items-center no-gutters"><span class="widget-title__inner col">Search Options</span><i class="ic flaticon-car-repair col-auto"></i></h3>
              <div class="widget-content">
                <div class="widget-inner">
                  <form method="GET" action="{{ route('cars.'.app()->getLocale()) }}" class="b-filter">
                    <div class="b-filter__main row">
                      <div class="b-filter__row col-xl-12 col-md-6">
                      <div style="margin-bottom: 24px;"><a style="margin-bottom: 38px;font: 700 16px Montserrat;color: #222;text-transform: uppercase;text-decoration: none;" href="?class=1"> <span style="font-size: 30px;color: red">&rarr;</span> {{ __('lang.ekonom') }}</a></div>
                      <div style="margin-bottom: 24px;"><a style="margin-bottom: 38px;font: 700 16px Montserrat;color: #222;text-transform: uppercase;text-decoration: none" href="?class=2"> <span style="font-size: 30px;color: red">&rarr;</span> {{ __('lang.biznes') }}</a></div>
                      <div style="margin-bottom: 24px;"><a style="margin-bottom: 38px;font: 700 16px Montserrat;color: #222;text-transform: uppercase;text-decoration: none" href="?class=3"> <span style="font-size: 30px;color: red">&rarr;</span> {{ __('lang.premium') }}</a></div>
                      <div style="margin-bottom: 24px;"><a style="margin-bottom: 38px;font: 700 16px Montserrat;color: #222;text-transform: uppercase;text-decoration: none" href="?class=4"> <span style="font-size: 30px;color: red">&rarr;</span> {{ __('lang.Busses_Minivans') }}</a></div>
                      <div style="margin-bottom: 24px;"><a style="margin-bottom: 38px;font: 700 16px Montserrat;color: #222;text-transform: uppercase;text-decoration: none" href="?class=5"> <span style="font-size: 30px;color: red">&rarr;</span> {{ __('lang.Crossovers_SUVs') }}</a></div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- end .b-filter-->
            
          </aside>
        </div>
        <div class="col-xl-9">
          
          <!-- end .b-filter-goods-->
          
          <div class="b-goods-group row">
           
            @foreach ($cars as $item)
            <div class="col-12">
                <div class="b-goods b-goods_list"><a class="b-goods__img" href="{{ route('car_single.'.app()->getLocale(),[$item->id,$item->slug]) }}"><img class="img-scale" src="{{ asset($item->img) }}" alt="photo">
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
                      <div class="col"><a class="b-goods__title" href="{{ route('car_single.'.app()->getLocale(),[$item->id,$item->slug]) }}">{{ $item->brend }} {{ $item->model }} </a>
                      </div>
                      <div class="col-auto">
                        <div class="b-goods__price text-primary"><span class="b-goods__price-title">{{ __('lang.price') }}</span><span class="b-goods__price-number">{{ $item->price }} / AZN</span></div>
                      </div>
                    </div>
                    <div class="b-goods-descrip row no-gutters">
                      <div class="b-goods-descrip__item col">
                        <div class="b-goods-descrip__inner">
                          <div class="b-goods-descrip__wrap"><i class="ic flaticon-speedometer"></i><span class="b-goods-descrip__info"></span>
                            <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">{{ __('lang.muherrik') }}</span><span class="b-goods-descrip__text">{{ $item->muherrik }} L</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="b-goods-descrip__item col">
                        <div class="b-goods-descrip__inner">
                          <div class="b-goods-descrip__wrap"><i class="ic flaticon-fuel-station-pump"></i><span class="b-goods-descrip__info"> 38/45</span>
                            <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">{{ __('lang.yanacaq') }}</span><span class="b-goods-descrip__text">
                                @if ($item->yanacaq==1) {{ __('lang.benzin') }}
                                @elseif($item->yanacaq==2) {{ __('lang.hibrid') }} 
                                @else {{ __('lang.dizel') }}
                                @endif
                            </span></div>
                          </div>
                        </div>
                      </div>
                      <div class="b-goods-descrip__item col">
                        <div class="b-goods-descrip__inner">
                          <div class="b-goods-descrip__wrap"><i class="ic flaticon-gearshift"></i><span class="b-goods-descrip__info"> Semi-Auto</span>
                            <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">{{ __('lang.trans') }}</span><span class="b-goods-descrip__text">
                                @if ($item->trans==1)
                                {{ __('lang.avtomatik') }}
                                @else
                                {{ __('lang.mexanik') }}
                                @endif    
                            </span></div>
                          </div>
                        </div>
                      </div>
                      <div class="b-goods-descrip__item b-goods-descrip__item_list col">
                        <div class="b-goods-descrip__inner">
                          <div class="b-goods-descrip__wrap"><i class="ic flaticon-calendar"></i>
                            <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">{{ __('lang.year') }}</span><span class="b-goods-descrip__text">2016</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="b-goods__footer">
                      <div class="row no-gutters justify-content-between">
                        <div class="col-auto"><span style="background-color: #E2B71C;font-size: 15px;font-weight: 600;cursor: pointer;border-radius:5px" class="b-goods__tag">
                            <a style="color: #fff;opacity: 0.9;text-decoration: none" href="{{ route('car_single.'.app()->getLocale(),[$item->id,$item->slug]) }}">{{ __('lang.show_more') }}</a></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
           
          </div>
          <div class="container">
           @if($cars->count()!=0)
           <nav aria-label="Page navigation">
            <ul class="pagination">
                <!-- Önceki sayfa bağlantısı -->
                @if ($cars->currentPage() > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $cars->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                @endif
        
                <!-- Sayfalar -->
                @for ($i = 1; $i <= $cars->lastPage(); $i++)
                    <li class="page-item{{ ($cars->currentPage() == $i) ? ' active' : '' }}">
                        <a class="page-link" href="{{ $cars->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
        
                <!-- Sonraki sayfa bağlantısı -->
                @if ($cars->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $cars->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
           @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection