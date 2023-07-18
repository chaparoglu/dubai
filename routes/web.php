<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\TeacherCourse;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CoursesController;
use App\Http\Controllers\Front\VacanciController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\SillabusController;
use App\Http\Controllers\Front\TeachersController;
use App\Http\Controllers\Admin\CertifcatController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsEventController;
use App\Http\Controllers\Admin\SubscripeController;
use App\Http\Controllers\Admin\WhoCourseController;
use App\Http\Controllers\Front\DiscountsController;
use App\Http\Controllers\Front\GraduatesController;
use App\Http\Controllers\Front\SertifkatController;
use App\Http\Controllers\Admin\ConsultatingController;
use App\Http\Controllers\Front\KonsultasiyaController;
use App\Http\Controllers\Admin\ContactMessagesController;
use App\Http\Controllers\Front\RegisterMessageController;
use App\Http\Controllers\Front\SubscripeMessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



$locale = Request::segment(1);

if(in_array($locale, ['az','en','ru'])){
    App::setLocale($locale);
}else{
    App::setLocale('az');

    $locale = '';
}
Route::fallback(function () {
    return redirect()->route('404');
});


Route::get('/change-status/{id}',[CourseController::class,'change_status'])->name('change-status');

Route::name('admin.')->prefix('/admin')->group(function () {

Route::group(['middleware' => 'isLogin'],function()
{

    Route::get('/login',[AuthController::class,'index'])->name('login');
    Route::post('/login-post',[AuthController::class,'signin_post'])->name('login_post');

});

Route::group(['middleware' => 'notLogin'],function()
{

    Route::get('/',[DashboardController::class,'index'])->name('index');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/profil-update',[AuthController ::class,'profil_update'])->name('profil_update');
    Route::post('/profil-update',[AuthController ::class,'profilupdate_post'])->name('profilupdate_post');

    //**** Setting ****/
    Route::get('/setting-index', [SettingController::class,'index'])->name('setting.index');
    Route::post('/setting-update/{id}', [SettingController::class,'update'])->name('setting.update');
    Route::post('/settingt/aktiv', [SettingController::class,'aktiv'])->name('setting_aktiv');

     //**** ABOUT ****/
     Route::get('/about-index', [AboutController::class,'index'])->name('about.index');
     Route::post('/about-update/{id}', [AboutController::class,'update'])->name('about.update');

    Route::resource('/partner', PartnerController::class);
    Route::get('/partner/delete/{id}', [PartnerController::class,'delete'])->name('partner.delete');

    //**** SLIDER ****/
    Route::resource('/slider', SliderController::class);
    Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');

    //**** GALERY ****/
    Route::resource('/galery', GaleryController::class);
    Route::get('/galery/delete/{id}', [GaleryController::class,'delete'])->name('galery.delete');

    //**** CARS ****/
    Route::resource('/car', CarController::class);
    Route::get('/car/delete/{id}', [CarController::class,'delete'])->name('car.delete');

   

    //****SEO ****/
    Route::resource('/seo', SeoController::class);
    Route::get('/seo/delete/{id}',[SeoController::class,'delete'])->name('seo.delete');




    //Messages
    Route::get('/messages',[ContactMessagesController::class,'index'])->name('message.index');
    Route::get('/message-destroy/{id}',[ContactMessagesController ::class,'delete'])->name('message.delete');
    Route::get('message-edit/{id}',[ContactMessagesController::class,'edit'])->name('message.edit');

    Route::get('/consultation',[ConsultatingController::class,'index'])->name('consultation.index');
    Route::get('/consultation-destroy/{id}',[ConsultatingController ::class,'delete'])->name('consultation.delete');
    Route::get('consultation-edit/{id}',[ConsultatingController::class,'edit'])->name('consultation.edit');

    //Register Messager
    Route::get('/register-messages',[RegisterController::class,'index'])->name('register_message.index');
    Route::get('/register-message-destroy/{id}',[RegisterController ::class,'delete'])->name('register_message.delete');
    Route::get('register-message-edit/{id}',[RegisterController::class,'edit'])->name('register_message.edit');

    //SubScripe
    Route::get('/subscripe',[SubscripeController::class,'index'])->name('subscripe.index');
    Route::get('/subscripe/delete/{id}',[SubscripeController ::class,'delete'])->name('subscripe.delete');
    Route::get('/subscripe-email',[SubscripeController::class,'export_emails'])->name('export_emails');



    Route::resource('/certificate', CertifcatController::class);
    Route::get('/certificate/delete/{id}',[CertifcatController::class,'delete'])->name('certificate.delete');


    Route::resource('/question', QuestionController::class);
    Route::get('/question/delete/{id}',[QuestionController::class,'delete'])->name('question.delete');

    Route::get('/support/delete/{id}',[SupportController::class,'delete'])->name('support.delete');
    Route::resource('/support', SupportController::class);
    

});



});

Route::get('/error',[FrontController::class,'error'])->name('404');


Route::get('/',[FrontController::class,'index'])->name('index.az');
Route::get('/en',[FrontController::class,'index'])->name('index.en');
Route::get('/ru',[FrontController::class,'index'])->name('index.ru');  

Route::get('/haqqimizda',[FrontController::class,'about'])->name('about.az');
Route::get('/en/about',[FrontController::class,'about'])->name('about.en');
Route::get('/ru/o-nac',[FrontController::class,'about'])->name('about.ru'); 

Route::get('/reservasiya',[FrontController::class,'reservation'])->name('reservation.az');
Route::get('/en/reservation',[FrontController::class,'reservation'])->name('reservation.en');
Route::get('/ru/bronirovanie',[FrontController::class,'reservation'])->name('reservation.ru'); 

Route::get('/elaqe',[FrontController::class,'contact'])->name('contact.az');
Route::get('/en/contacti',[FrontController::class,'contact'])->name('contact.en');
Route::get('/ru/kontakti',[FrontController::class,'contact'])->name('contact.ru');  
Route::post('/contact-form',[FrontController::class,'contact_post'])->name('contact_post');

Route::get('/icare-masinlari',[FrontController::class,'cars'])->name('cars.az');
Route::get('/en/rental-cars',[FrontController::class,'cars'])->name('cars.en');
Route::get('/ru/katalog-avtomobilej',[FrontController::class,'cars'])->name('cars.ru'); 

Route::get('/icare-masin/{id}/{slug}',[FrontController::class,'car_single'])->name('car_single.az');
Route::get('/en/rental-car/{id}/{slug}',[FrontController::class,'car_single'])->name('car_single.en');
Route::get('/ru/katalog-avtomobile/{id}/{slug}',[FrontController::class,'car_single'])->name('car_single.ru'); 