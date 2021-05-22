<?php

namespace App\Http\Controllers;
use App\Model\Boot;
// use App\Model\UniversityDetails;
// use App\Model\CourseDetails;
use App\Models\CourseDetails;
use App\Models\UniversityDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BootController extends Controller
{
    public function index()
    {
        return view('pages.layout-page');
    }
    public function home()
    {
        return view('pages.home-page');
    }
    public function apply()
    {   
        $university = UniversityDetails::get();
        $course =CourseDetails::get();
        return view('pages.apply-page',compact('university','course'));
    }
    public function faq()
    {
        return view('pages.faq-page');
    }
    public function aboutus()
    {
        return view('pages.aboutus-page');
    }
    public function contact()
    {
        return view('pages.contact-page');
    }
    public function admin()
    {
        return view('admin.admin-layout');
    }
    public function admin_transcript()
    {
        return view('admin.admin-transcript');
    }
    public function admin_manage_order_current()
    {
        return view('admin.admin-manage-order');
    }
    public function admin_manage_order_ongoing()
    {
        return view('admin.admin-manage-order-ongoing');
    }
    public function admin_manage_order_completed()
    {
        return view('admin.admin-manage-order-completed');
    }
    public function admin_manage_user()
    {
        return view('admin.admin-manage-user');
    }
    public function admin_manage_payment()
    {
        return view('admin.admin-manage-payment');
    }
    public function user_layout()
    {
        return view('user.user-layout');
    }
    public function user_ongoing()
    {
        return view('user.user-ongoing-order');
    }
    public function user_transcript()
    {
        return view('user.user-transcript-current');
    }

    public function user_previous()
    {
        return view('user.user-transcript-previous');
    }
    public function user_payment()
    {
        return view('user.user-payment');
    }
    public function user_raise()
    {
        return view('user.user-raise');
    }
    public function login()
    {
        return view('pages.login-page');
    }
    public function register()
    {
        return view('pages.register-page');
    }
    public function user_profile()
    {
        return view('user.user-profile');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
        // return view('pages.home');
    }
    public function sign()
    {
        return view('pages.signup');
    }
}
