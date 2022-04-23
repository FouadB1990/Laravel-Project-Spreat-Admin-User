<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function adminIndex()

    {
        // $data = Process::with('user')->latest()->get();
        // //  dd( $data );
        // return view('admin',['admindata'=>$data]);
        return view('admin/dashboard');
    }

}
