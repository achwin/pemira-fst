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
use App\DetailPemilihanBem;
use Ap\DetailPemilihanBlm;
use App\DetailPemilihanDlm;
use App\DetailPemilihanHima;
use App\User;
use Session;

class VoteController extends Controller{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       $user = Auth::user(); 
       if (Auth::user()->is_admin == 1) {
        session(['who_logged_in'=>'admin']);
            return redirect::to('/register');
        }           							   

        session(['who_logged_in'=>'user']);

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

        DB::beginTransaction();

try {
   PemilihanHima::where('id_pemilihan', $request->input('id_pemilihan'))->increment('paslon_hima_suara');
        PemilihanBem::where('id_pemilihan_bem', $request->input('id_pemilihan_bem'))->increment('paslon_bem_suara');
        PemilihanDlm::where('id_pemilihan_dlm', $request->input('id_pemilihan_dlm'))->increment('calon_dlm_suara');
        User::where('id_user',Auth::user()->id_user)->update(['pernah_milih' => 1]);

        $id_hima = $request->input('id_pemilihan');

        $id_bem = $request->input('id_pemilihan_bem');

        $id_dlm = $request->input('id_pemilihan_dlm');



        $id_user = Auth::user()->id_user;

        $detailPemilihanBem = new DetailPemilihanBem;

        $detailPemilihanDlm = new DetailPemilihanDlm;

        $detailPemilihanHima = new DetailPemilihanHima;


        $detailPemilihanBem->detail_pemilihan_bem_user = $id_user;
        $detailPemilihanBem->detail_pemilihan_bem_id_fk = $id_bem;

        $detailPemilihanDlm->detail_pemilihan_dlm_user = $id_user;
        $detailPemilihanDlm->detail_pemilihan_dlm_id_fk = $id_dlm;

        $detailPemilihanHima->detail_pemilihan_hima_user = $id_user;
        $detailPemilihanHima->detail_pemilihan_hima_id_fk = $id_hima;

        $detailPemilihanBem->save();
        $detailPemilihanDlm->save();
        $detailPemilihanHima->save();



        //return redirect()->to('/logout')->with('sudah_voting', 'Terima kasih sudah memilih dalam PEMIRA FST 2017');
                             
       
    DB::commit();
    // all good

     return Redirect::to('/logout');
     
} catch (\Exception $e) {
    DB::rollback();
    // something went wrong
}
    	


    }
}
