<?php

namespace App\Http\Controllers;

use App\Models\Raise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Validator;


class RaiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::select('select * from raises');
        // return view('/user-raise',['users'=>$users]);
        $userId = Auth::user()->id;
        // $userdata= User::where(['id'=> $userId])->first();
        $userdata=Raise::where(['userid'=> $userId])->get();
         return view('user.user-raise',['userdata'=>$userdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
       ]);
       $raise =Raise::insert([
        'subject' => $request->subject,
        'message' => $request->message,
        'userid' => Auth::user()->id,
     ]);
       
     return  redirect('/user-raise')->with('success', 'Project aangepast');

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
     * @param  \App\Models\Raise  $raise
     * @return \Illuminate\Http\Response
     */
    public function show(Raise $raise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raise  $raise
     * @return \Illuminate\Http\Response
     */
    public function edit(Raise $raise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raise  $raise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raise $raise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raise  $raise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raise $raise)
    {
        //
    }
}

// $userId = Auth::user()->id;
// // $userdata= User::where(['id'=> $userId])->first();
// $apply =Apply::where(['id'=> $userId])->first();
// return view ('/user-transcript-current',compact('apply'=>$apply));