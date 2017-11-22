<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class VoteController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){                
        return view('vote.index');
    }
}
