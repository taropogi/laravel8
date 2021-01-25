<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
      $this->middleware(['auth']);
    }
    public function index()
    {
      //   dd(auth()->user()); // get the current user

    //  dd(auth()->user()->posts()); // calling the method will return the relationship type

     // dd(auth()->user()->posts); // calling the property will return the actual data from the database
        return view('dashboard.index');
    }
}
