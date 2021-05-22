<?php

namespace App\Http\Controllers;
use App\Models\Apply;
use App\Models\CourseDetails;
use App\Models\UniversityDetails;
use app\Models\User;
use App\Models\PricingDetails;
use App\View\Components\AppLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Validator;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $universityName=UniversityDetails::get();             
        // $course=CourseDetails::where(['university'=>$universityName]);
        // $course=CourseDetails::get();
        // $course = CourseDetails::where([ 'university_Id'=>$request->universityId,])->get();
        // return response($serviceParts, 200);
        return view('pages.apply-page',compact('universityName'));
  
    }
     
    public function getCourse(Request $request){
                $course = CourseDetails::where([ 'university_Id'=>$request->university])->get();
                return response($course, 200);
  
    }
    public function getPrice(Request $request){
      
        $price = CourseDetails::where(['id'=>$request->course,'university_id'=>$request->university])->first();
        return response($price->price, 200);
    }
    public function autoCal(Request $request){
        dd($request->all());
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'sets' => 'required',
            'price'=>'required',
            'shipping' => 'required',
            'delivery' => 'required',
            
       ]);
        $apply = Apply::insert([
           'name' => $request->name,
           'mobile' => $request->mobile,
           'email' => $request->email,
           'university' => $request->university,
           'course' => $request->course,
           'passing' => $request->passing,
           'sets' => $request->sets,
           'price' => $request->price,
           'shipping' => $request->shipping,
           'delivery' => $request->delivery,
           'userid' => Auth::user()->id,
           
        ]);
     
        return  redirect('/apply-page')->with('success', 'Project aangepast'); 
      
    }
    
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
   function show(Request $request)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    function edit(Apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    function update(Request $request, Apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
     function destroy(Apply $apply)
    {
        //
    }

