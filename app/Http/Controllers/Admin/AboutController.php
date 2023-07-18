<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::first();
        return view('admin.pages.about.index',compact('about'));
    }

        

    public function update(Request $request, $id)
    {
        $about=About::findOrFail($id);
        $data = $request->all();
        $about->update($data);
        toastr()->success('Haqqımızda məlumatları güncəlləndi.');
        return redirect()->route('admin.about.index');  
    }
}
