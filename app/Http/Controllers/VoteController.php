<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Pemilihan;
use Illuminate\Support\Facades\Redirect;

class VoteController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

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

    public function vote(Request $request)
    {
    	# code...
    	$id_pemilih = Auth::user()->id_user;

        $arr_id_calon = array(
            4,6,8,10,13
            ); 

        $is_valid = 1;

        $data = array();

        for($i=0;$i<count($arr_id_calon);$i++){
            $tmp = array(
                'id_pemilih'=>$id_pemilih,
                'id_calon'=>$arr_id_calon[$i],
                'is_valid'=>$is_valid
                );  

            array_push($data,$tmp);
        }



    	DB::table('pemilihan')->insert($data);

        return Redirect::to('/logout');


    }
}
