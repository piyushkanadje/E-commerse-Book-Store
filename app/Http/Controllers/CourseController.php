<?php

namespace App\Http\Controllers;

use App\Models\CourseDetails;
use App\Models\UniversityDetails;
use App\Models\PricingDetails;
use Illuminate\Http\Request;

class CourseController extends Controller
{ 
    public function create(Request $request)
    {  
        $request->validate([
            'course' => 'required',   
            'university'=>'required',
            'price'=>'required'        
       ]);
       $price= CourseDetails::get();
       foreach($price as $key=>$value){
        if($value->courseName==$request->course && $value->universityName==$request->university)
        {
          return response("Allready Exist", 400);        
        }
     }
       $raise =CourseDetails::insert([
        'courseName' => $request->course,
        'university_id'=>$request->university,
        'price'=>$request->price,

     ]);
       
     return  redirect('/course')->with('success', 'Project aangepast');
    }
    public function index()
    {
        $corlist= CourseDetails::get();
        $university=UniversityDetails::get();
        // $course=CourseDetails::get();
        $price=PricingDetails::get();
        return view('course.course',compact('university','corlist','price'));
        // return view('',["corlist"=>$corlist]);
  
    }
    public function delete($id)
    {
        CourseDetails::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
    public function edit ($id)
    {
        $data= CourseDetails::find($id);
        return view('course.edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        //  dd($request->all());
        // $university= UniversityDetails::find($req->input('id'));
        // $university->university=$req->input('university');
        // $university->save();
        // // $req->session()->flash('status','Post updated Successfully!');
        // return redirect('/university');
        CourseDetails::where('id', $request->id)->update([
            'courseName'=>$request->course,
         
        ]);
    return redirect('/course');
    }
}
