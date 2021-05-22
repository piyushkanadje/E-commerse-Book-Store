<?php

namespace App\Http\Controllers;
use App\Models\UniversityDetails;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unilist= UniversityDetails::paginate(10);
        return view('unicrud.universitycrud',["unilist"=>$unilist]);
  
    }
    
    public function delete($id)
    {
        UniversityDetails::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'university' => 'required',
           
       ]);
       $raise =UniversityDetails::insert([
        'universityName' => $request->university,
     ]);
       
     return  redirect('/course')->with('success', 'Project aangepast');
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
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show(UniversityDetails $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $data= UniversityDetails::find($id);
        return view('unicrud.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\University  $university
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
        UniversityDetails::where('id', $request->id)->update([
            'universityName'=>$request->university,
         
        ]);
    return redirect('/university');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(UniversityDetails $university)
    {
        //
    }
}
