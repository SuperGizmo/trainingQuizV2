<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\admin_DynamicCourse;
use Illuminate\Support\Facades\Mail;
use App\Mail\customer_DynamicCourse;

class SendCourseController extends Controller
{
    public function sendCourse(Request $request){
        Mail::to($request->email)->queue(new customer_DynamicCourse($request));
        if(config('site.ADMIN_EMAIL') != ""){
            Mail::to(config('site.ADMIN_EMAIL'))->queue(new admin_DynamicCourse($request));
        }
        if(config('site.ADMIN_EMAIL_TWO') != ""){
            Mail::to(config('site.ADMIN_EMAIL_TWO'))->queue(new admin_DynamicCourse($request));
        }
        if(config('site.ADMIN_EMAIL_THREE') != ""){
            Mail::to(config('site.ADMIN_EMAIL_THREE'))->queue(new admin_DynamicCourse($request));
        }
        if(config('site.ADMIN_EMAIL_FOUR') != ""){
            Mail::to(config('site.ADMIN_EMAIL_FOUR'))->queue(new admin_DynamicCourse($request));
        }
        if(config('site.ADMIN_EMAIL_FIVE') != ""){
            Mail::to(config('site.ADMIN_EMAIL_FIVE'))->queue(new admin_DynamicCourse($request));
        }
    }
}
