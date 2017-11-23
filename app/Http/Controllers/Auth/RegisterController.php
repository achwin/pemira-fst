<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Angkatan;
use App\ProgramStudi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
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
        $this->middleware('guest');
    }

    public function showRegisterForm()
    {
        # code...
        $angkatan = Angkatan::all();
        $program_studi = ProgramStudi::all();

        return view('register.register',
            ['angkatan'=>$angkatan,
                'program_studi'=>$program_studi
            ]
            );
    }

    public function createUser(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(), [
        'nim_user' => 'required|max:20'
    ]);

        $check_user = $user = User::where('nim_user', '=', $request->nim_user)->first();

        if($check_user){
            return redirect()->back()->with('register_gagal', 'User sudah pernah didaftarkan');
        }

        if ($validator->fails()) {
        return redirect('/register')
            ->withInput()
            ->withErrors($validator);
        }


    $user = new User;
    $user->nim_user = $request->nim_user;
    $user->prodi_user = $request->prodi_user;
    $user->angkatan_user = $request->angkatan_user;
    $user->is_admin = 0;

    $rand_string = $this->random_str(4,"abcdefghijklmnopqrstuvwxyz");

    $generated_password = $request->nim_user.$rand_string;

    $bcrypted = bcrypt($generated_password);

    $user->password_user = $bcrypted;

    $user->save();

    return redirect()->back()->with('nim_user', $request->nim_user)
                             ->with('password_user', $generated_password);


    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

      /**
 * Generate a random string, using a cryptographically secure 
 * pseudorandom number generator (random_int)
 * 
 * For PHP 7, random_int is a PHP core function
 * For PHP 5.x, depends on https://github.com/paragonie/random_compat
 * 
 * @param int $length      How many characters do we want?
 * @param string $keyspace A string of all possible characters
 *                         to select from
 * @return string
 */
private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}
}
