<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$himaki = DB::table('paslon')->where('prodi_paslon',3)->get();

    	//dd($himaki);

        return view('vote.index',
        	[
        		'himaki'=>$himaki
        	]

        	);
    }
}
