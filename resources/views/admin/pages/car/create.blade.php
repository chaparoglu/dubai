@extends('admin.layouts.master')

@section('title')
Maşın Əlavə et
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Maşın Əlavə et</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.car.store') }}">
        @csrf
        <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-group" for="">Şəkil</label>
                    <div class="mb-3">
                        <input name="img" class="form-control" type="file" id="formFile">
                    </div>
                    @error('img')
                    <span class="text-danger mt-2">{{ $message }}</span> 
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-group" for="">Şəkillər</label>
                    <div class="mb-3">
                        <input name="images[]" multiple class="form-control" type="file" id="formFile">
                    </div>
                    @error('images')
                    <span class="text-danger mt-2">{{ $message }}</span> 
                    @enderror
                </div>
                
           </div>
        <div class="row mb-3">
         <div class="col-md-6">
            <div class="form-group translate">
                <label for="">Model</label>
                <input class="form-control" type="text" name="model" >
            </div>
            @error('model')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>

         <div class="col-md-6">
            <div class="form-group translate">
                <label for="">Brend</label>
                <input type="text" name="brend" class="form-control" >
            </div>
            @error('brend')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="form-group translate">
                    <label for="">Mühərrik</label>
                    <input class="form-control" type="text" name="muherrik" >
                </div>
                @error('muherrik')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>

            <div class="col-md-4">
               <div class="form-group ">
                   <label for="">Klass</label>
                   <select name="class" class="form-control ">
                    <option value="">Klası seç</option>
                    <option value="1">Ekonom</option>
                    <option value="2">Biznes</option>
                    <option value="3">Premium</option>
                    <option value="4">Busses & Minivans</option>
                    <option value="5">Crossovers&SUVs</option>
                   </select>
               </div>
               @error('class')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
   
            <div class="col-md-4">
                <div class="form-group ">
                    <label for="">Transmissiya</label>
                    <select name="trans" class="form-control ">
                     <option value="">Transmissiya seç</option>
                     <option value="1">Avtomatik</option>
                     <option value="2">Mexanik</option>
                 
                    </select>
                </div>
                @error('trans')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
           </div>
   

           <div class="row mb-3">
            <div class="col-md-4">
                <div class="form-group translate">
                    <label for="">Qiymət</label>
                    <input class="form-control" type="number" name="price" >
                </div>
                @error('price')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>

            <div class="col-md-4">
               <div class="form-group ">
                   <label for="">Yanacaq</label>
                   <select name="yanacaq" class="form-control ">
                    <option value="">Klası seç</option>
                    <option value="1">Benzin</option>
                    <option value="2">Hibrid</option>
                    <option value="3">Dizel</option>
                   </select>
               </div>
               @error('yanacaq')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
   
            <div class="col-md-4">
                <div class="form-group translate">
                    <label for="">İl</label>
                    <input class="form-control" type="number" name="year" >
                </div>
                @error('year')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
            
           </div>

      
           <div class="row mb-3">
            <div class="col-md-4">
                <div class="form-group translate">
                    <label for="">Sıra</label>
                    <input class="form-control" type="number" name="order" >
                </div>
                @error('order')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>

            <div class="col-md-4">
               <div class="form-group ">
                   <label for="">Status</label>
                   <select name="status" class="form-control ">
                    <option value="2">Deaktiv</option>
                    <option value="1">Aktiv</option>
                   </select>
               </div>
               @error('status')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
   
            
            
           </div>

        <a href="{{ route('admin.slider.index') }}" class="btn btn-success">Geri</a>
        <button type="submit" class="btn btn-primary">Əlavə et</button>
        </form>
        </div>
        </div>
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
