<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\User;
use App\Models\PricingDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
  public function sendOtp(Request $request)
   {
   
    $otp = rand(1000,9999);
    
    $userData = User::where(['mobile' => $request->mobile])->first();
    if( !$userData)
    {
      return response('User Does Not exist ',250);
    }
    $mobile = $request->mobile;
    if($mobile !== null) {
      $user = User::where(['mobile' => $request->mobile])->update(['otp' => $otp]);
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.textlocal.in/send/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"apikey\"\r\n\r\niZ9bbBwPfNo-T2T5kZqTmmmbj2syEZ5MHb0KB5RbxA\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"numbers\"\r\n\r\n".$mobile."\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"sender\"\r\n\r\nAASAIT\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"message\"\r\n\r\nDear Nil,%nhow are ".$otp."?#.%nTeam Aasa\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        "postman-token: c0c025af-719f-a24f-4910-22ba143c4d9e"
      ),
    ));   
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
    }
  }


  

   public function applyafterLogin(Request $request) {
  $formValue = $request->formData;
  $myValue=  array();
    parse_str($formValue, $myValue);
    // dd($myValue['name']);
    $matchThese = ['mobile' => $request->mobile, 'otp' => $request->otp ];
    $user  = User::where($matchThese)->first();

      if($user){
        // dd($user);
          Auth::login($user, true);
          User::where(['mobile' => $request->mobile])->update(['otp' => null]);
          $formData = Apply::create ([
            'name' =>$myValue['name'],
            'mobile' => $myValue['mobile'],
            'email' => $myValue['email'],
            'university' => $myValue['university'],
            'course' => $myValue['course'],
            'passing' => $myValue['passing'],
            'sets' => $myValue['sets'],
            'price' =>$myValue['price'],  
            'shipping' =>$myValue['shipping'],
            'delivery' =>$myValue['delivery'],  
            'userid'=>$user->id,  

        ]);
          return response('Login Successful', 200);
      }
      else{
        return response('Invalid OTP', 250);
          // return Redirect::back ();

      }    
    }
    function afterLogin(Request $request) {
      $matchThese = ['mobile' => $request->mobile, 'otp' => $request->otp ];
      $user  = User::where($matchThese)->first();
    
        if( $user){
            Auth::login($user, true);
            User::where(['mobile' => $request->mobile])->update(['otp' => null]);
            return response('Login Successful', 200);
        }
        else{
          return response('Invalid OTP', 250);
            // return Redirect::back ();
    
        }
    }
    

}
 