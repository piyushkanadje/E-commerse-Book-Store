<?php

namespace App\Http\Controllers;
use App\Models\Apply;
use App\Models\Raise;
use App\Models\User;
use App\Models\UniversityDetails;
use App\View\Components\AppLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



class AdminController extends Controller
{   
    public function updateStatus(Request $request){
        
    // dd($request->status);
        $update =Apply::where([
            'id' => $request->statusId

        ])->update(['status' => $request->status]);
        if($update){
            return response("success",200);
        }else{
            return response("Update Failed",250);
        }
        
    }
     function manage()
     {   
         $apply=Apply::get();
         return view('admin.admin-manage-order',compact('apply'));
     }
     function manageInprogress(Request $request){
      
        // $order = Apply::Where( ['status' => 'Inprogress'])->get();
        $apply=Apply::get();
        return view('admin.admin-manage-order-ongoing',compact('apply'));
       
     }
    
     function manageCompleted(Request $request){
        $apply=Apply::get();
        return view('admin.admin-manage-order-completed',compact('apply'));
     }

    function manageuser()
    {  
        $user =User::get();
        return view('admin.admin-manage-user',compact('user'));

    }
    function transcript()
    {
        // $applys = Apply::paginate(3);
        $applys = Apply::whereDate('created_at', Carbon::today())->get();
        $university = UniversityDetails::get();
        // $userdata =User::where('created_at',User::max('created_at'))->orderBy('created_at','desc')->get();
        $userdata = User::whereDate('created_at', Carbon::today())->get();
        return view('admin.adminTranscriptToday',compact('applys','userdata','university'));
    }
    function weekPay(){
        $university = UniversityDetails::get();
        $applys = Apply::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $userdata = User::whereDate('created_at', Carbon::today())->get();
        return view('admin.adminTranscriptWeek',compact('applys','userdata','university'));
    }
    function monthPay(){
        $applys = Apply::whereMonth('created_at', Carbon::now()->month)->get();
        $university = UniversityDetails::get();
        $userdata = User::whereDate('created_at', Carbon::today())->get();
        return view('admin.adminTranscriptMonth',compact('applys','userdata','university'));
    }
    function raise()
    {   $user =User::get();
        $raise = Raise::get();
        return view('admin.admin-raise',compact('raise','user'));
    }
}
