<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners=Partner::get();
        return view('admin.pages.partner.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner=new Partner;
        $data = $request->all();
        $validator = Validator::make($data, [
            'img'   => 'required|mimes:png,jpg,svg,webp',
        ],
        [
            'img.required'=>'Please enter the img',
            'img.mimes'=>'The image should be in png ,jpg,svg,webp format',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/partner/'.$fileName;
            $request->img->move('image/partner/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        Partner::create($data);

        toastr()->success('added partner information.');
        return redirect()->route('admin.partner.index');
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

        $partner=Partner::findOrFail($id);

        return view('admin.pages.partner.edit',compact('partner'));
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
        $partner=Partner::findOrFail($id);
        $data=$request->all();
        $validator = Validator::make($data, [
            'img'   => 'mimes:png,jpg,svg,webp',
        ],
        [
            'img.mimes'=>' The image should be in png ,jpg,svg,webp format',
        ]);

        if($validator->fails())
        {
             return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            if(File::exists($partner->img))
            {
                File::delete($partner->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(0,100).time().'.'.$ext;
            $fileNameWithUpload='image/partner/'.$fileName;
            $request->img->move('image/partner/',$fileName);
            $data['img']=$fileNameWithUpload;
        }

        
        $partner->update($data);
        toastr()->success('updated partner information.');
        return redirect()->route('admin.partner.index');
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
            $partner=Partner::findOrFail($id);
            if(File::exists($partner->img))
            {
                File::delete($partner->img);
            }
        $partner->delete();
        return response()->json([
            'message' => 'Your Partner have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
