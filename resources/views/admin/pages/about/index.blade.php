@extends('admin.layouts.master')

@section('title')
Haqqımızda
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Haqqımızda</h3>
        </div>
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <div class="lang">
                    <a href="az" class="btn btn-success active">Az</a>
                    <a href="en" class="btn btn-success">En</a>
                    <a href="ru" class="btn btn-success">Ru</a>
                </div>
            </nav>
        </div>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.about.update',$about->id) }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
               <div class="form-group ">
                   <label for="">İl təcrübə</label>
                   <input type="number" name="year" value="{{ $about->year }}"   class="form-control">
               </div>
            </div>
               <div class="col-md-4">
               <div class="form-group ">
                <label for="">İcarə maşın</label>
                <input type="number" name="car_number" value="{{ $about->car_number }}"   class="form-control">
            </div>
        </div>

            <div class="col-md-4">
            <div class="form-group ">
                <label for="">müştəri məmnuniyyəti</label>
                <input type="text" name="client" value="{{ $about->client }}"   class="form-control">
            </div>
        </div>
           </div>
        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Başlıq</label>
                   <input type="hidden" name="name" value='{{ $about->name }}'>
                   <textarea   class="form-control">{{ $about->translate('name') }}</textarea>
               </div>
               @error('name')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>

           <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Açıqlama</label>
                   <input type="hidden" name="desc" value='{{ $about->desc }}'>
                   <textarea id="editor"  class="form-control"> {{ $about->translate('desc') }}</textarea>
               </div>
               @error('desc')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>

           <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Niyə biz</label>
                   <input type="hidden" name="niye_biz" value='{{ $about->niye_biz }}'>
                   <textarea id="editor1"  class="form-control">{{ $about->translate('niye_biz') }}</textarea>
               </div>
               @error('name')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>
        <button type="submit" class="btn btn-primary">Yenilə  </button>
        </form>
        <hr>


 
        </div>
        </div>
</div>
</div>

@endsection 
@push('js')

<script src="{{ asset('manager/js/translate.js') }}"></script>
<script src="{{ asset('manager/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('manager/js/cketditor.js') }}"></script>
@endpush
