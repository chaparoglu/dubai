@extends('admin.layouts.master')

@section('title')
Maşınlar
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Maşın Yenilə</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.car.update',$car->id) }}">
        @csrf
        @method("PUT")
        
        <div><img width="400" height="300" src="{{ asset($car->img) }}" alt=""></div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-group" for="">Şəkil</label>
                <div class="mb-3">
                    <input name="img" class="form-control" type="file" id="formFile">
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group translate">
                    <label for="">Sıra</label>
                    <input value="{{ $car->order }}" class="form-control" type="number" name="order" >
                </div>
                @error('order')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
    
            <div class="col-md-4">
               <div class="form-group ">
                   <label for="">Status</label>
                   <select name="status" class="form-control ">
                    <option {{ $car->status==1 ? 'selected' : ""  }} value="1">Aktiv</option>
                    <option {{ $car->status==2 ? 'selected' : ""  }} value="2">Deaktiv</option>
                   </select>
               </div>
               @error('status')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>        
           </div>
       </div>
    <div class="row mb-3">
     <div class="col-md-6">
        <div class="form-group translate">
            <label for="">Model</label>
            <input type="text" class="form-control"  name="model" value='{{ $car->model }}'>
        </div>
        @error('model')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
     </div>

     <div class="col-md-6">
        <div class="form-group translate">
            <label for="">Brend</label>
            <input type="text" name="brend"  class="form-control" value='{{ $car->brend }}'>
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
                <input class="form-control" value=" {{ $car->muherrik }}" type="text" name="muherrik" >
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
                <option {{ $car->class==1 ? 'selected' : ""  }} value="1">Ekonom</option>
                <option {{ $car->class==2 ? 'selected' : ""  }} value="2">Biznes</option>
                <option {{ $car->class==3 ? 'selected' : ""  }} value="3">Premium</option>
                <option {{ $car->class==4 ? 'selected' : ""  }} value="4">Busses & Minivans</option>
                <option {{ $car->class==5 ? 'selected' : ""  }} value="5">Crossovers&SUVs</option>
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
                 <option {{ $car->trans==1 ? 'selected' : ""  }} value="1">Avtomatik</option>
                 <option {{ $car->trans==2 ? 'selected' : ""  }} value="2">Mexanik</option>
             
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
                <input value="{{ $car->price }}" class="form-control" type="number" name="price" >
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
                <option {{ $car->yanacaq==1 ? 'selected' : ""  }} value="1">Benzin</option>
                <option {{ $car->yanacaq==2 ? 'selected' : ""  }} value="2">Hibrid</option>
                <option {{ $car->yanacaq==3 ? 'selected' : ""  }} value="3">Dizel</option>
               </select>
           </div>
           @error('yanacaq')
           <span class="text-danger mt-2">{{ $message }}</span> <br>
           @enderror
        </div>

        <div class="col-md-4">
            <div class="form-group translate">
                <label for="">İl</label>
                <input  value="{{ $car->year }}" class="form-control" type="number" name="year" >
            </div>
            @error('year')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
        
       </div>

  
       
        <div class="row mb-3">

   @php
   $image=\App\Models\Car::where('id',$car->id)->first();
   $images=explode('|',$image->images);
   @endphp
               <label for="">Şəkillər</label> 

   <div  class="col-md-12">
       @foreach ($images as $image)
           <div style="display: inline-flex;
flex-direction: column;
align-items: center;">
@if($image)

<a href="{{asset($image)}}" data-fancybox="group">
               <img width="100px" height="100px" src="{{ asset($image) }}" alt="">
</a> 
            
               <input type="hidden" name="image_ids[]" value="{{ $image }}"/>
               <i style="font-size:26px ;cursor: pointer" class="fas fa-times text-danger"></i>
                @endif 
           </div>            
       @endforeach
       <div class="mb-3">
           <br>
           <input name="images[]" multiple class="form-control" type="file" id="formFile">
       </div>
   @error('images')
   <span class="text-danger mt-2">{{ $message }}</span> <br>
   @enderror
   </div>
   </div>

        <a href="{{ route('admin.car.index') }}" class="btn btn-success">Geri</a>
        <button type="submit" class="btn btn-primary">Yenilə</button>
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
<script>
    let close = $('.fa-times');
    close.on('click',function(){
        $(this).parent().remove();
    });
</script>
@endpush
