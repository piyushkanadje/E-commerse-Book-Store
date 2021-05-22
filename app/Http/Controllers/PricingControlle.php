<?php

namespace App\Http\Controllers;
use App\Models\CourseDetails;
use App\Models\UniversityDetails;
use App\Models\PricingDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PricingControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
     
     $university=UniversityDetails::get();
     $course=CourseDetails::get();
     $price=PricingDetails::get();
     return view('price.price',compact('university','course','price'));
      
    }
    public function delete($id)
    {
        $deletePrice=PricingDetails::where(['id'=>$id])->delete();
        // PricingDetails::find($id)->delete;
          return Redirect('/price');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'course'=>'required',
            'university'=>'required',
            'price'=>'required'
           
       ]);
       $price= PricingDetails::get();
       foreach($price as $key=>$value){
          if($value->courseName==$request->course && $value->universityName==$request->university)
          {
            return response("Allready Exist", 400);        
          }
       }
       $price=PricingDetails::insert([
        'courseName' => $request->course,
        'universityName'=>$request->university,
        'price'=>$request->price,

     ]);
     return redirect('/price');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PricingDetails  $pricingDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PricingDetails $pricingDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PricingDetails  $pricingDetails
     * @return \Illuminate\Http\Response
     */
   public function edit ($id)
    { 
         $university = UniversityDetails::get();
        $course = CourseDetails::get();
        // $selectUniversity = UniversityDetails::where(['id'=>$id])->value('universityName');
        $data=PricingDetails::where(['id'=>$id])->first();
        // dd($data->price);
        return view('price.priceedit',compact('data','university','course',));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PricingDetails  $pricingDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //  dd($request->all());
        // $university= UniversityDetails::find($req->input('id'));
        // $university->university=$req->input('university');
        // $university->save();
        // // $req->session()->flash('status','Post updated Successfully!');
        // return redirect('/university');
        PricingDetails::where('id', $request->priceid)->update([
            'universityName'=>$request->university,
            'courseName'=>$request->course,
            'price'=>$request->price,
         
        ]);

    return redirect('/price');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PricingDetails  $pricingDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PricingDetails $pricingDetails)
    {
        //
    }
}
