<?php

namespace App\Http\Controllers\Front;


use Mail;
use App\Models\Car;
use App\Models\About;
use App\Models\Galery;
use App\Models\Slider;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function error()
    {
        return view('front.pages.404');
       
    }
    public function contact()
    {
        return view('front.pages.contact');
    }

    public function reservation()
    {
        $cars=Car::orderBy('id','DESC')->where('status',1)->get();
        return view('front.pages.reservation',compact('cars'));
    }
    public function contact_post(Request $request)
    {
        $data=$request->all();
        $validator=Validator::make($data,[
            'name'=>'required',
            'phone'=>'required',
            'msj'=>'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

       ContactMessage::create($data);


        $email = "eliyevperviz466@gmail.com";
        $title= 'EASYGO saytindan mesaj var';

        $data = [
            'phone'         =>        $request->phone,
            'name'          =>        $request->name,
            'msj'           =>        $request->msj,
        ];
        Mail::send('mail.contact', $data, function($m) use ($title,$email) {
            $m->from('pervize058@gmail.com', env('APP_NAME'));
            $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
        });
        
        
            toastr()->success('Mesajınız uğurla göndərildi');
            return redirect()->back();
    }
    public function index()
    {
        $galeries=Galery::orderBy('id','DESC')->take(8)->get();
        $sliders=Slider::orderBY('id','DESC')->get();
        $about=About::first();
        $questions=Question::get();
        $cars=Car::where('status',1)->orderBy('order','ASC')->take(8)->get();
        return view('front.pages.index',compact('galeries','sliders','cars','about','questions'));
    }

    public function about()
    {
        $about=About::first();
        $questions=Question::get();
        $galeries=Galery::orderBy('id','DESC')->take(8)->get();

        return view('front.pages.about',compact('about','questions','galeries'));
    }

    public function cars(Request $request)
    {
        if ($request->class) {
            $cars=Car::where('class',$request->class)->where('status',1)->orderBy('id','DESC')->paginate(6);
            return view('front.pages.car',compact('cars'));

        }
        $cars=Car::where('status',1)->orderBy('id','DESC')->paginate(6);
        return view('front.pages.car',compact('cars'));
    }

    public function car_single($id,$slug)
    {
        $car=Car::where('id',$id)->where('slug',$slug)->first();
        return view('front.pages.car_single',compact('car'));
    }

}
