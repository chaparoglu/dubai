@extends('front.layouts.master')
@section('lang')
@include('front.layouts.lang')

@endsection
@section('content')
      <!-- end .header-->
      <div style="height: 550px" class="section-title-page section-title-page_mod-a area-bg area-bg_dark area-bg_op_60">
        <div class="section-title-page__decor"></div>
        <div class="area-bg__inner">
          <div class="container text-center">
            <h1 class="b-title-page">{{ __('lang.reservation') }}</h1>
          </div>
        </div>
      </div>
      <!-- end .b-title-page-->
      
       <div class="l-main-content">
        <div class="container">
    
            
            
            
            <div class="row">
              
              <div class="col-md-12">
                <section style="margin-left: 40px;margin-bottom: 200px" class="section-form-contacts">
                  <h2 class="ui-title-inner"><span class="text-primary"> Biz sizə zəng edək! </span></h2>
                  <form   action="{{ route('contact_post') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form-group ">
                            <select class="form-control " name="car" id="">
                              <option value="">Maşını Seçin</option>
                              @foreach ($cars as $item)
                              <option value="{{ $item->brend }} {{ $item->model }} {{ $item->year }}">{{ $item->brend }} {{ $item->model }} {{ $item->year }}</option>
                              @endforeach
                            </select>
                        </div>
                        @error('car')
                        <span class="text-danger mt-2">{{ $message }}</span> <br>
                        @enderror
                     </div>

                     <div class="col-md-6">
                      <div class="form-group ">
                          <input type="text" placeholder="Adınızı daxil edin " class="form-control" name="name">
                      </div>
                     </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form-group ">
                            <input type="text" placeholder="Soyadinizi  daxil edin " class="form-control" name="surname">
                        </div>
                       </div>

                     <div class="col-md-6">
                      <div class="form-group ">
                          <input type="text" placeholder="Nomrənizi  daxil edin " class="form-control" name="phone">
                      </div>
                     </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form-group ">
                            <input type="datetime-local" placeholder="Nomrənizi  daxil edin " class="form-control" name="phone">
                        </div>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group ">
                            <input type="datetime-local" placeholder="Nomrənizi  daxil edin " class="form-control" name="phone">
                        </div>
                       </div>
                       
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Rezervasiya et</button>
                  </form>
                </section>
                <!-- end .b-form-contact-->
              </div>
            </div>
            
            
            
        </div>
      </div>
        
        
     
@endsection