@extends('front.layouts.master')
@section('lang')
@include('front.layouts.lang')

@endsection
@section('content')
      <!-- end .header-->
      <div class="section-title-page section-title-page_mod-a area-bg area-bg_dark area-bg_op_60">
        <div class="section-title-page__decor"></div>
        <div class="area-bg__inner">
          <div class="container text-center">
            <h1 class="b-title-page">Contact Us</h1>
          </div>
        </div>
      </div>
      <!-- end .b-title-page-->
      
       <div class="l-main-content">
        <div class="container">
    
            
            
            
            <div class="row">
              <div class="col-md-6">
                <div class="map" id="map">
                  {!! $contact->xerite !!}
                </div>
              </div>
              <div class="col-md-6">
                <section style="margin-left: 40px;margin-bottom: 200px" class="section-form-contacts">
                  <h2 class="ui-title-inner"><span class="text-primary"> Biz sizə zəng edək! </span></h2>
                  <form   action="{{ route('contact_post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <input class="form-control"  type="text" name="name" placeholder="Your Name" required="required">
                    </div>
                    <div class="form-group">
                      <input class="form-control"  type="phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control"  name="msj"    rows="5" placeholder="Message" required="required"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </form>
                </section>
                <!-- end .b-form-contact-->
              </div>
            </div>
            
            
            
        </div>
      </div>
        
        
     
@endsection