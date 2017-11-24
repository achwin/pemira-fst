<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;

class VoteController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       if (Auth::user()->is_admin == 1) {
            return redirect::to('/register');
        }           
      return view('vote.index');
    }
}
