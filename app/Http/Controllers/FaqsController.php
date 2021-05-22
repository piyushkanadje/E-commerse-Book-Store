<?php

namespace App\Http\Controllers;

use App\Models\faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unilist= faqs::paginate(10);
        return view('faqcrud.insert',["unilist"=>$unilist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
           
       ]);
       $raise =faqs::insert([
        'faqtitle' => $request->title,
        'faqdescription'=>$request->description,

     ]);
       
     return  redirect('/insert')->with('success', 'Project aangepast');
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
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(faqs $faqs)
    {
        $users = DB::table('faqs')->select('faqtitle','faqdescription')->get();
        return view('faqcrud.faq-page',['users'=>$users]);
    }
    public function delete($id)
    {
        faqs::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
      
        $data= faqs::find($id);
        return view('faqcrud.faqedit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {  
        faqs::where('id', $request->id)->update([
            'faqtitle'=>$request->title,
            'faqdescription'=>$request->description,
        ]);
    return redirect('/insert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(faqs $faqs)
    {
       
    }
}
