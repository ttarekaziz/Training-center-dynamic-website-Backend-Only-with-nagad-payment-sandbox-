<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/checking', function () {
    return view('allcourse');
});

Route::get('/checking2', function () {
    return view('allblog');
});

Route::get('/coupon', 'StudentController@coupon')->name('coupon');

Route::post('token', 'PaymentController@token')->name('token');
Route::get('createpayment', 'PaymentController@createpayment')->name('createpayment');
Route::get('executepayment', 'PaymentController@executepayment')->name('executepayment');
Route::resource('orders', 'OrderController');
Route::get('nagad/pay','NagadPaymentController@pay')->name('nagad.pay');
Route::get('nagad/callback','NagadPaymentController@callback');
Route::get('/all-courses', 'FrontendController@allcourse')->name('allcourse');
Route::get('/all-blog', 'FrontendController@allblog')->name('allblog');

//Payment
Route::get('/pay-now/{id}', 'StudentController@payNow')->name('paynow');
Route::get('/checkout/{id}', 'StudentController@checkout')->name('checkout');


Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/course', 'FrontendController@course')->name('course');
Route::get('/admission', 'FrontendController@admission')->name('admission');
Route::post('/admission', 'FrontendController@admission2')->name('admission2');
Route::get('/mentor', 'FrontendController@mentor')->name('mentor');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/gallery', 'FrontendController@gallery')->name('gallery');
Route::get('/seminar', 'FrontendController@seminar')->name('seminar');
Route::get('/social-activity', 'FrontendController@socialActivity')->name('social-activity');
Route::get('/student-feedback', 'FrontendController@studentFeedback')->name('student-feedback');
Route::get('/course_details/{id}', 'FrontendController@course_details')->name('course_details');
Route::get('/blog-details/{id}', 'FrontendController@blogdetails')->name('blog-details');
Route::get('/social_activity_details/{id}', 'FrontendController@social_activity_details')->name('social_activity_details');
Route::post('/contact-us', 'FrontendController@contactus')->name('contact-us');
Route::post('/registration', 'FrontendController@registration')->name('registration');
Route::get('/registernow/{id}','FrontendController@registernow')->name('registernow');
Route::get('/registerseminar/{id}','FrontendController@registerseminar')->name('registerseminar');
Route::post('/consultant', 'FrontendController@consultant')->name('consultant');
Route::get('/checking/{id}', 'FrontendController@checking')->name('checking');
//Comment
Route::post('/addcomment','FrontendController@addcomment')->name('addcomment');

Route::get('/student-login','StudentController@studentlogin')->name('student_login');
Route::post('/student/login','StudentController@doLogin')->name('logindo');
Route::get('/logout','StudentController@logout')->name('logout');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/assign-new', 'AdminController@assignMentor')->name('assign-mentor');
    Route::get('/newdepertment', 'AdminController@newdepertment')->name('newdepertment');
    Route::get('/depertmentlist', 'AdminController@depertmentlist')->name('depertmentlist');
    Route::post('/newdepertment2', 'AdminController@newdepertment2')->name('newdepertment2');
    Route::post('/assign-new2', 'AdminController@assignMentor2')->name('assign-mentor2');
    Route::get('/assigncourse', 'AdminController@assigncourse')->name('assigncourse');
    Route::post('/assign-course2', 'AdminController@assigncourse2')->name('assign-course2');
    Route::get('/mentor-list', 'AdminController@mentorlist')->name('mentorlist');
    Route::get('/writeblog', 'AdminController@writeblog')->name('writeblog');
    Route::post('/writeblog2', 'AdminController@writeblog2')->name('writeblog2');
    Route::get('/slidernew', 'AdminController@newslider')->name('newslider');
    Route::get('/sliders', 'AdminController@sliders')->name('sliders');
    Route::post('/newslider2', 'AdminController@newslider2')->name('newslider2');
    Route::get('/welcomeslider', 'AdminController@welcomeslider')->name('welcomeslider');
    Route::post('/welcomeslider2', 'AdminController@welcomeslider2')->name('welcomeslider2');
    Route::get('/add-image-in-gallery', 'AdminController@addgallery')->name('addgallery');
    Route::post('/add-image-in-gallery2', 'AdminController@addgallery2')->name('addgallery2');
    Route::get('/addseminar', 'AdminController@addseminar')->name('addseminar');
    Route::post('/addseminar2', 'AdminController@addseminar2')->name('addseminar2');
    Route::get('/addworkshop', 'AdminController@addworkshop')->name('addworkshop');
    Route::post('/addworkshop2', 'AdminController@addworkshop2')->name('workshop2');
    Route::get('/mentoredit/{id}', 'AdminController@mentoredit')->name('mentoredit');
    Route::get('/mentoredit3/{id}', 'AdminController@mentoredit3')->name('mentoredit3');
    Route::put('/mentor/{id}/update', 'AdminController@mentorupdate')->name('mentoredit2');
    Route::get('/departmentedit/{id}', 'AdminController@departmentedit')->name('departmentedit');
    Route::put('/departmentedit/{id}/update', 'AdminController@departmentupdate')->name('departmentedit2');
    Route::get('/Course-lis', 'AdminController@courselist')->name('course-list');
    Route::get('/newsocial', 'AdminController@newsocial')->name('newsocial');
    Route::post('/writesocial2', 'AdminController@writesocial2')->name('writesocial2');
    Route::get('/social-list', 'AdminController@sociallist')->name('social-list');
    Route::get('/newleader', 'AdminController@newleader')->name('newleader');
    Route::post('/newleader2', 'AdminController@newleader2')->name('newleader2');
    Route::get('/leaderlist', 'AdminController@leaderlist')->name('leaderlist');
    Route::get('/leaderedit/{id}', 'AdminController@leaderedit')->name('leaderedit');
    Route::put('/leaderedit2/{id}', 'AdminController@leaderedit2')->name('leaderedit2');
    Route::get('/sliderlist', 'AdminController@sliderlist')->name('sliderlist');
    Route::get('/galleries', 'AdminController@galleries')->name('galleries');
    Route::get('/newbatch/{id}', 'AdminController@newbatch')->name('newbatch');
    Route::post('/newbatch2', 'AdminController@newbatch2')->name('newbatch2');
    Route::get('/runningbatchlist', 'AdminController@runningbatchlist')->name('runningbatchlist');
    Route::get('/studentlist/{id}', 'AdminController@studentlist')->name('studentlist');
    Route::get('/studentlist-feedback2', 'AdminController@studentfeedback2')->name('student-feedback2');
    Route::post('/studentlist-feedback21', 'AdminController@studentfeedback21')->name('student-feedback21');
    Route::get('/seminarlist', 'AdminController@seminarlist')->name('seminarlist');
    Route::get('/workshoplist', 'AdminController@workshoplist')->name('workshoplist');
    Route::get('/completeevent/{id}', 'AdminController@completeevent')->name('completeevent');
    Route::get('/participants/{id}', 'AdminController@participants')->name('participants');

    Route::get('/mentor/{id}/delete','AdminController@mentordestroy')->name('mentordelete');
    Route::get('/leader/{id}/delete','AdminController@leaderdestroy')->name('leaderdelete');
    Route::get('/complete/{id}','AdminController@completebatch')->name('complete');
    Route::get('/complete','AdminController@completebatchlist')->name('completebatch');
    Route::get('/eventsdone', 'AdminController@doneevents')->name('eventsdone');
    Route::get('/success-student', 'AdminController@successstudent')->name('Success-Students');
    Route::post('/success-student2', 'AdminController@successstudent2')->name('success-student2');
    Route::put('/socialcover/{id}', 'AdminController@socialcover')->name('socialcover');
    Route::put('/address/{id}', 'AdminController@address')->name('address');
    Route::put('/welcome/{id}/update', 'AdminController@welcomeupdate')->name('welcomeedit');
Route::put('/videoedit/{id}/update', 'AdminController@videoedit')->name('videoedit');
Route::put('/svideoedit/{id}/update', 'AdminController@svideoedit')->name('svideoedit');
Route::put('/aboutedit/{id}/update', 'AdminController@aboutupdate')->name('aboutedit');
Route::put('/missionedit/{id}', 'AdminController@missionedit')->name('missionedit');
Route::put('/vissionedit/{id}', 'AdminController@vissionedit')->name('visionedit');
Route::put('/depertmentedit/{id}', 'AdminController@depertmentedit')->name('depertmentedit');
Route::put('/phone/{id}', 'AdminController@phone')->name('phone');
Route::put('/email/{id}', 'AdminController@email')->name('email');
Route::get('/createmodule/{id}', 'AdminController@createmodule')->name('createmodule');
Route::post('/createmodule2', 'AdminController@createmodule2')->name('createmodule2');
Route::get('/requirements/{id}', 'AdminController@requirements')->name('requirements');
Route::post('/requirements2', 'AdminController@requirements2')->name('requirements2');
Route::put('/batchedit/{id}', 'AdminController@batchedit')->name('batchedit');
Route::put('/courseedit2/{id}', 'AdminController@courseedit')->name('courseedit2');
Route::put('/course_overview/{id}', 'AdminController@course_overview')->name('course_overview');
Route::get('/module/{id}/delete','AdminController@moduledelete')->name('moduledelete');
Route::get('/requirmentdelete/{id}/delete','AdminController@requirmentdelete')->name('requirmentdelete');
Route::put('/blogedit/{id}', 'AdminController@blogedit')->name('blogedit');
Route::put('/counteredit/{id}/update', 'AdminController@counteredit')->name('counteredit');
Route::get('/admin-list', 'AdminController@adminlist')->name('adminlist');
Route::get('/approveadmin/{id}','AdminController@approveadmin')->name('approveadmin');
Route::get('/blockadmin/{id}','AdminController@blockadmin')->name('blockadmin');
Route::get('/blockc/{id}','AdminController@blockc')->name('blockc');
Route::get('/activec/{id}','AdminController@activec')->name('activec');
Route::get('/all_consult', 'AdminController@all_consult')->name('all_consult');
Route::get('/consultview/{id}', 'AdminController@consultview')->name('consultview');
Route::get('/consultdetails/{id}', 'AdminController@consultdetails')->name('consult-details');
Route::get('/all_message', 'AdminController@all_message')->name('all_message');
Route::get('/messagedetails/{id}', 'AdminController@messagedetails')->name('messagedetails');


Route::put('/socialedit/{id}', 'AdminController@socialedit')->name('socialedit');
Route::put('/othotha/{id}', 'AdminController@othotha')->name('othotha');

Route::get('/facilities', 'AdminController@facilities')->name('facilities');
Route::get('/why_us', 'AdminController@why_us')->name('why_us');
Route::get('/facilityedit/{id}', 'AdminController@facilityedit')->name('facilityedit');
Route::put('/facilityedit2/{id}', 'AdminController@facilityedit2')->name('facilityedit2');
Route::get('/whyusedit/{id}', 'AdminController@whyusedit')->name('whyusedit');
Route::put('/whyusedit2/{id}', 'AdminController@whyusedit2')->name('whyusedit2');
Route::get('/sliderdelete/{id}/delete','AdminController@sliderdelete')->name('sliderdelete');
Route::get('/gallerydelete/{id}/delete','AdminController@gallerydelete')->name('gallerydelete');
Route::get('/messageview/{id}/','AdminController@messageview')->name('messageview');
Route::get('/messageview/{id}/','AdminController@messageview')->name('messageview');
Route::get('/wsliderlist','AdminController@wsliderlist')->name('wsliderlist');
Route::get('/wsliderdelete/{id}/delete','AdminController@wsliderdelete')->name('wsliderdelete');
Route::get('/pagetitle', 'AdminController@pagetitle')->name('pagetitle');
Route::get('/pagetitle/{id}', 'AdminController@titleedit')->name('titleedit');
Route::put('/titleedit2/{id}', 'AdminController@titleedit2')->name('titleedit2');
Route::get('/sister-concern', 'AdminController@sisterconcern')->name('sisterconcern');
Route::get('/addsister', 'AdminController@addsister')->name('addsister');
Route::post('addsister2', 'AdminController@addsister2')->name('addsister2');
Route::get('/sisteredit/{id}', 'AdminController@sisteredit')->name('sisteredit');
Route::put('/sisteredit2/{id}', 'AdminController@sisteredit2')->name('sisteredit2');
Route::get('/sister/{id}/delete','AdminController@sisterdelete')->name('sisterdelete');
Route::get('/logo', 'AdminController@logo')->name('logo');
Route::get('/logoedit/{id}', 'AdminController@logoedit')->name('logoedit');
Route::put('/logoedit2/{id}', 'AdminController@logoedit2')->name('logoedit2');
Route::get('/sociallist', 'AdminController@sociallist')->name('sociallist');
Route::get('/newlink', 'AdminController@newlink')->name('newlink');
Route::post('newlink2', 'AdminController@newlink2')->name('newlink2');
Route::get('/linkedit/{id}', 'AdminController@linkedit')->name('linkedit');
Route::put('/linkedit2/{id}', 'AdminController@linkedit2')->name('linkedit2');
Route::get('/linkdelete/{id}/delete','AdminController@linkdelete')->name('linkdelete');
Route::get('/editprofile','AdminController@editprofile')->name('editprofile');
Route::put('/editprofile2/{id}', 'AdminController@editprofile2')->name('editprofile2');
Route::get('/editpassword','AdminController@editpassword')->name('editpassword');
Route::put('/location/{id}', 'AdminController@location')->name('location');
Route::get('/s-student', 'AdminController@s_students')->name('s_students');
Route::get('/successedit/{id}', 'AdminController@successedit')->name('successedit');
Route::put('/success-edit2/{id}', 'AdminController@successedit2')->name('success-edit2');
Route::get('feedback-list', 'AdminController@feedbacklist')->name('feedbacklist');
Route::get('/fedit/{id}', 'AdminController@fedit')->name('fedit');
Route::get('/fdelete/{id}', 'AdminController@fdelete')->name('fdelete');
Route::put('/fedit2/{id}', 'AdminController@fedit2')->name('fedit2');
Route::get('/success/{id}/delete','AdminController@successdestroy')->name('successdelete');
Route::get('/f/{id}/delete','AdminController@fdestroy')->name('fdelete');
Route::get('/change-password','AdminController@change_password')->name('change_password');
Route::post('/update-password','AdminController@update_password')->name('update_password');	

//Demo Design update

Route::put('/copyright/{id}','AdminController@copyright')->name('copyright');
Route::put('/headingedit/{id}','AdminController@headingedit')->name('headingedit');


//Route for Menu
Route::get('/admin/menu/manage','AdminController@menu_index')->name('menu.index');
Route::post('/admin/menu/store','AdminController@menu_store')->name('menu.store');
Route::get('/admin/menu/destroy/{id}','AdminController@menu_destroy')->name('menu.destroy');
Route::post('/admin/menu/update/{id}','AdminController@menu_update')->name('menu.update');
Route::put('/eventedit/{id}','AdminController@eventedit')->name('eventedit');

//payment
Route::get('/payment-complete','AdminController@p_done')->name('p_done');
Route::get('/payment-pendings','AdminController@p_pending')->name('p_pending');

//Student Profile
Route::get('/student_profile/{id}','AdminController@student_profile')->name('student_profile');


//Route for SubMenu
Route::get('/admin/submenu/manage','AdminController@submenu_index')->name('submenu.index');
Route::post('/admin/submenu/store','AdminController@submenu_store')->name('submenu.store');
Route::get('/admin/submenu/destroy/{id}','AdminController@submenu_destroy')->name('submenu.destroy');
Route::post('/admin/submenu/update/{id}','AdminController@submenu_update')->name('submenu.update');
Route::get('/meta-key', 'AdminController@metakey')->name('metakey');
Route::put('/meta-key/{id}', 'AdminController@metakeyup')->name('metakeyup');
Route::get('/Google-Analytic', 'AdminController@analytic')->name('analytic');
Route::put('/analytic2/{id}', 'AdminController@analytic2')->name('analytic2');

Route::get('/export-excel', 'AdminController@ExportIntoExcel')->name('excel');
Route::get('/export-csv', 'AdminController@exportIntoCSV')->name('csv');

Route::get('/rexport-excel', 'AdminController@rExportIntoExcel')->name('rexcel');
Route::get('/rexport-csv', 'AdminController@rexportIntoCSV')->name('rcsv');

Route::get('/pexport-excel', 'AdminController@pExportIntoExcel')->name('pexcel');
Route::get('/pexport-csv', 'AdminController@pexportIntoCSV')->name('pcsv');
Route::get('/departmentblock/{id}', 'AdminController@departmentblock')->name('departmentblock');
Route::get('/departmentactive/{id}', 'AdminController@departmentactive')->name('departmentactive');
Route::get('/bloglist', 'AdminController@bloglist')->name('bloglist');
Route::get('/comments/{id}', 'AdminController@pcomment')->name('pcomment');
Route::get('/acomment/{id}', 'AdminController@acomment')->name('acomment');


//Student Profile
Route::get('/profile', 'StudentController@profile')->name('profile');


//coupon
Route::get('/coupon-list', 'AdminController@coupon')->name('acoupon');




Route::get('reset-password', 'StudentController@resetPassword')->name('resetpassword');

//search
Route::get('/search', 'AdminController@search')->name('search');
Route::get('/pay-now1/{id}', 'AdminController@payNow1')->name('paynow1');



//coupon

Route::get('/dcoupon/{id}','AdminController@coupon_destroy')->name('dcoupon');
Route::post('/ucoupon/{id}','AdminController@coupon_update')->name('ucoupon');

});
