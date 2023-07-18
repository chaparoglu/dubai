<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use App\Models\Vacancy;
use App\Models\Discount;
use App\Models\Course;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = NewsEvent::orderBy('id','DESC')->get();
        $discounts=Discount::orderBy('id','DESC')->get();
        $vacancies=Vacancy::orderBy('id','DESC')->get();
        $courses=Course::where('active',1)->orderBy('id','DESC')->get();
  
        return response()->view('sitemap', [
            'posts' => $posts,
            'discounts' => $discounts,
            'vacancies'=>$vacancies,
            'courses'=>$courses
        ])->header('Content-Type', 'text/xml');
    }
}
