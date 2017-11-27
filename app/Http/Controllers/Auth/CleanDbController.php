<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Angkatan;
use App\ProgramStudi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;

class CleanDbController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

   // DB::statement("SET foreign_key_checks=0");
      //User::truncate();
      DB::table('user')->where('is_admin', '!=', 1)->delete();

     // DB::statement("SET foreign_key_checks=1");

      DB::table('pemilihan_bem')
            ->update(['paslon_bem_suara' => 0]);

      DB::table('pemilihan_dlm')
            ->update(['calon_dlm_suara' => 0]);

    

      DB::table('pemilihan_hima')
            ->update(['paslon_hima_suara' => 0]);


      return response()->json([
        'status_cleardb'=>'sukses'
      ]);

  
      

    }
}
