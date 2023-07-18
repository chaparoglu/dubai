<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $cars=Car::orderBy('order','ASC')->get();
        return view('admin.pages.car.index',compact('cars'));
    }

    public function create()
    {
        return view('admin.pages.car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course=new Car;
        $data = $request->all();
        $validator = Validator::make($data, [
            'img'   => 'required',
            'images'   => 'required',
            'muherrik'   => 'required',
            'class'   => 'required',
            'trans'   => 'required',
            'price'   => 'required',
            'yanacaq'   => 'required',
            'year'   => 'required',
            'order'   => 'required',
            'status'   => 'required',
        ],
        [
            'img.required'=>'Zəhmət olmasa şəkili daxil edin ',
            'images.required'=>'Zəhmət olmasa şəkilləri daxil edin ',
            'muherrik.required'=>'Zəhmət olmasa mühərriki daxil edin ',
            'class.required'=>'Zəhmət olmasa klası daxil edin ',
            'trans.required'=>'Zəhmət olmasa transmisiyani daxil edin ',
            'price.required'=>'Zəhmət olmasa qiyməti daxil edin ',
            'yanacaq.required'=>'Zəhmət olmasa yanacagı daxil edin ',
            'year.required'=>'Zəhmət olmasa ili daxil edin ',
            'order.required'=>'Zəhmət olmasa sıranı daxil edin ',
            'status.required'=>'Zəhmət olmasa statusu daxil edin ',       
            
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $images=[];
       if($request->has('images'))
       {
            foreach($request->images as $file )
        {
            $ext=$file->extension();
            $fileName=$file->getClientOriginalName();
            $fileNameWithUpload='image/car/'.$fileName;
            $file->move('image/car/',$fileName);
            $images[]=$fileNameWithUpload;
        }
       }
        $data['images']=implode('|',$images);

        $data['slug'] = Str::slug($request->model);

            if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/car/'.$fileName;
            $request->img->move('image/car/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        Car::create($data);

        toastr()->success('Maşın əlavə olundu');
        return redirect()->route('admin.car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car=Car::findOrFail($id);
        return view('admin.pages.car.edit',compact('car'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car=Car::findOrFail($id);
            $data = $request->all();
             $request->image_ids;

        if($request->image_ids!='')
        {
            $images = array_filter($request->image_ids,function($id) use($car){
            return Str::contains($car->images,$id);
        });
        }
      
if ($request->has('images'))
{
        foreach($request->images as $file )
        {
            $ext=$file->extension();
            $fileName=$file->getClientOriginalName();
            $fileNameWithUpload='image/car/'.$fileName;
            $file->move('image/car/',$fileName);
          
            $images[]=$fileNameWithUpload;

        }


}
           if(isset($images))
           {
               $data['images']=implode('|',$images);
           }

           $data['slug'] = Str::slug($request->model);
      if($request->has('img'))
        {
            if(File::exists($car->img))
            {
                File::delete($car->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(0,100).time().'.'.$ext;
            $fileNameWithUpload='image/car/'.$fileName;
            $request->img->move('image/car/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        $car->update($data);

        toastr()->success('Kurs məlumatları güncəlləndi');
        return redirect()->back();    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $course=Course::findOrFail($id);
           
            $images=explode('|',$course->images);   
            foreach ($images as $key => $value) {
                if(File::exists($value))
            {
                File::delete($value);
            }
            }
            
        $course->delete();
        return response()->json([
            'message' => 'Your Course have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
}
}
