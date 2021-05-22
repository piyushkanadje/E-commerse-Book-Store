<?php

namespace App\Http\Controllers;
use App\Models\Raise;
use App\Models\Contact;
use App\Models\Apply;
use App\Models\User;
use App\Models\UniversityDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{  

  function tab()
  {
    return view('user.tabs');
  }
    function user_transcript()
    {
       
        if(Auth::check()) {
            $userId = Auth::user()->id;
            $university = UniversityDetails::get();
            // $userdata= User::where(['id'=> $userId])->first();
            $userdata=Apply::where(['userid'=> $userId])->get();
            return view ('user.user-transcript-current',compact('userdata','university'));
        }
    } 
  function ongoing()
  {
    $userId = Auth::user()->id;
    // $userdata= User::where(['id'=> $userId])->first();
    $university = UniversityDetails::get();
    $userdata=Apply::where(['userid'=> $userId])->get();
    return view ('user.user-ongoing-order',compact('userdata','university'));
    
  }
   

     public function passwordEdit(){
     $userId = Auth::user()->id;
     $data=User::where(['id'=> $userId])->first();
    return view('user.user-profile',['data'=>$data]);
    }
   public function passwordUpdate(Request $request)
   {
       $messages = [
      // 'email.unique' => 'Email Already Exist',
      // 'password.min' => 'Password length should not be less than 6 cahracters.',
      'confirmpassword.same' => 'Confirm password should match password.'

  ];

$request->validate([
// 'name'           => 'required|unique:users',
// 'email'            => 'required|unique:users',
// 'password'         =>'required|min:6',
'confirmpassword'  =>'required|same:password',
],$messages);

      $user = User::find(Auth::user()->id);
      // dd($request->all());
      $password = Hash::make($request->password);
      $updatepassword =  User::where(['id'=>Auth::user()->id])->update(['password'=>$password,'name'=>$request->name,'email'=>$request->email]);
return redirect('/user-profile');
   }  
}
