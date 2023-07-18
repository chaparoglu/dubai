
@extends('front.layouts.master')


@section('content')
    <div class="flex-container">
        <div class="text-center">
          <h1>
            <span class="fade-in" id="digit1">4</span>
            <span class="fade-in" id="digit2">0</span>
            <span class="fade-in" id="digit3">4</span>
          </h1>
          <h3 class="fadeIn">SƏHİFƏ TAPILMADI</h3>
          <button type="button" name="button"><a href="{{route('index.'.app()->getLocale())}}">ƏSAS SƏHİFƏYƏ KEÇ</a></button>
        </div>
      </div>
@endsection
