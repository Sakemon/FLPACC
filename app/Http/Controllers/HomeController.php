<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Input;
use Auth;
use App\Pengguna;
use App\User;
use App\Customer;
use Hash;
use Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

	public function showLogin()
	{
        $pesan='';
	    	return view('Auth/login',compact('pesan'));
	}

	public function createAdmin()
    {
        $user = new User();
        $user->username = Input::get('username');
        $user->password = Hash::make("FLPACC");
        $user->flag = 1;
        $user->save();

        return Redirect::to('homepageadmin');
    }

    public function dologin()
		{
			$pengguna=User::where('username','=',Input::get('username'))
			->where('flag','=',1)
			->first();

			if ($pengguna && Hash::check(Input::get('password'), $pengguna->password))
			{
				Auth::login($pengguna);
				Session::put('current_user', $pengguna->fullName);
				Session::put('idUser',$pengguna->idUser);
				Session::put('cdAdmin', $pengguna->cdAdmin);
				Auth::user($pengguna);
				// Session::put('idDepartemen',$pengguna->idPengguna);
				//Session::put('idRole',$pengguna->idRole);
				$data = Customer::where('customer.flag','0')
				->get();

				return Redirect::to('viewpending');
			}
			else {
				$pesan = 'Username atau password salah';
				return view('Auth/login',compact('pesan'));
			}
		}

	public function doLogout()
	{
		Auth::logout();
		Session::flush();

		return Redirect::to('admin');
	}
}
