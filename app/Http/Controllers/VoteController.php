<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\Facades\DB;
use App\PemilihanHima;
use App\PemilihanBem;
use App\PemilihanDlm;
use App\PemilihanBlm;
use App\User;
use Validator;

class VoteController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       $user = Auth::user(); 
       if (Auth::user()->is_admin == 1) {
            return redirect::to('/register');
        }           							   

        $data = [
            'user' => $user,
            'himatika'=> PemilihanHima::where('prodi_calon_hima',1)->get(),
            'himaki'  => PemilihanHima::where('prodi_calon_hima',3)->get(),
            'himafi'  => PemilihanHima::where('prodi_calon_hima',4)->get(),
            'himbio'  => PemilihanHima::where('prodi_calon_hima',5)->get(),
            'himasta' => PemilihanHima::where('prodi_calon_hima',7)->get(),
            'hmtb'    => PemilihanHima::where('prodi_calon_hima',8)->get(),
            'bem'     => PemilihanBem::all(),
            'dlm'     => PemilihanDlm::all(),
        ];
        return view('vote.index',$data);
    }

    public function vote(Request $request)
    {
        $v = \Validator::make($request->all(), [    
            'id_pemilihan'         => 'required _if:type,hima',
            'id_pemilihan_bem'     => 'required',
            'id_pemilihan_dlm'     => 'required',
            ]);
        if ( $v->fails() ) {
            return redirect()->back()->withErrors($v->errors())->withInput();
        }
        dd('weq');
    	PemilihanHima::where('id_pemilihan', $request->input('id_pemilihan'))->increment('paslon_hima_suara');
        PemilihanBem::where('id_pemilihan_bem', $request->input('id_pemilihan_bem'))->increment('paslon_bem_suara');
        PemilihanDlm::where('id_pemilihan_dlm', $request->input('id_pemilihan_dlm'))->increment('calon_dlm_suara');
        User::where('id_user',Auth::user()->id_user)->update(['pernah_milih' => 1]);
        return Redirect::to('/logout');
    }
}
