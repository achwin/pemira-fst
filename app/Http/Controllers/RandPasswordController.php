<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandPasswordController extends Controller
{

	/**
	*Generate a random password by using combination nim + random_string (length 4)
	*@param string $nim  nim of students
	*
	*@return string 
	**/

	public function get_random_password($nim)
	{
		# code...
		$rand_string = $this->random_str(4,"abcdefghijklmnopqrstuvwxyz");

		$generated_password = $nim.$rand_string;

		return view('test_password', [
        'generated_password' => $generated_password,
    	]);

	}
    //
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
