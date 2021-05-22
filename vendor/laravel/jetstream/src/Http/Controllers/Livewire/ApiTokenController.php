<?php

namespace Laravel\Jetstream\Http\Controllers\Livewire;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApiTokenController extends Controller
{
    /**
     * Show the user API token screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {    if(session('utype') === 'ADM')
        {
            return view('api.admin-index', [
               'request' => $request,
              'user' => $request->user(),
          ]);

        }
       return view('api.index', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

}
