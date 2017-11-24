<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
       if (Auth::user()->is_admin == 1) {
            return redirect::to('/register');
        }           

    	$himaki = DB::table('paslon')->where('prodi_paslon',3)
    								->where('kategori_pemilihan_fk',3)
    								->get();

    	$blm_2015 = DB::table('paslon')->where('angkatan_paslon',4)
    								   ->where('kategori_pemilihan_fk',2)
    								   ->get();

    	$blm_2016 = DB::table('paslon')->where('angkatan_paslon',5)
    								   ->where('kategori_pemilihan_fk',2)
    								   ->get();

		$blm_2017 = DB::table('paslon')->where('angkatan_paslon',6)
    								   ->where('kategori_pemilihan_fk',2)
    								   ->get();  

    	$bem = DB::table('paslon')->where('kategori_pemilihan_fk',1)->get();  

    	$dlm = DB::table('paslon')->where('kategori_pemilihan_fk',4)->get();								   

    	//dd($himaki);

        return view('vote.index',
        	[
        		'himaki'=>$himaki,
        		'blm_2015'=>$blm_2015,
        		'blm_2016'=>$blm_2016,
        		'blm_2017'=>$blm_2017,
        		'bem'=>$bem,
        		'dlm'=>$dlm
        	]
        	);
    }
}
