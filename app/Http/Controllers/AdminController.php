<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Input;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Plafond;
use App\Tenor;
use App\Customer;
use Validator;
use Carbon\Carbon;

class AdminController extends Controller
{
  public function viewpending()
  {
    $data = Customer::join('plafond','plafond.idPlafond','customer.idPlafond')
    ->join('tenor','tenor.idTenor','customer.idTenor')
    ->where('customer.flag','0')
	->where('plafond.flagType',Session::get('cdAdmin'))
    ->orderBy('customer.created_at','DESC')
    ->select('customer.idcustomer','customer.created_at as created_at_c', 'nama', 'email', 'phone', 'namaPlafond', 'lamaTenor', 'cicilan')
    ->get();

    return view('Admin.ViewPending', compact('data'));
  }
  public function viewaccept()
  {
    $data = Customer::where('customer.flag','1')->get();

    return view('Admin.ViewAccept', compact('data'));
  }
  public function viewrefuse()
  {
    $data = Customer::where('customer.flag','2')->get();

    return view('Admin.ViewRefuse', compact('data'));
  }

   public function Accept($idCustomer)
  {
    DB::table('customer')
    ->where('idCustomer', $idCustomer)
    ->update(array(
      'flag' => 1,
    ));
    return Redirect::to('viewpending');
  }

  public function Refuse($idCustomer)
  {
    DB::table('customer')
    ->where('idCustomer', $idCustomer)
    ->update(array(
      'flag' => 2,
    ));
    return Redirect::to('viewdata');
  }

 public function Notes(Request $request, $idCustomer)
 {
   switch ($request->input('action')) {
        case 'Accept':
        DB::table('customer')
        ->where('idCustomer', $idCustomer)
        ->update(array(
          'flag' => 1,
          'notes' => Input::get('Notes'),
        ));
            break;

        case 'Refuse':
        DB::table('customer')
        ->where('idCustomer', $idCustomer)
        ->update(array(
          'flag' => 2,
          'notes' => Input::get('Notes'),
        ));
            break;
    }
   return Redirect::to('viewpending');
 }

 public function viewplafond()
 {
   $data = Plafond::get();

   return view('Admin.ViewPlafond', compact('data'));
 }

 public function editplafond($idPlafond)
  {
    $data= Plafond::findOrFail($idPlafond);
    return view('Admin.EditPlafond',compact('data'));
  }

  public function updateplafond($idPlafond)
	{
		Plafond::where('idPlafond', $idPlafond)
		->update(array(
			'namaPlafond' => Input::get('namaPlafond'),
		));
		Session::flash('message', 'Data berhasil diubah');
		return Redirect::to('viewplafond');
	}

  public function viewtenor($idPlafond)
  {
    $data = Tenor::where('idPlafond',$idPlafond)->get();

    return view('Admin.ViewTenor', compact('data'));
  }

  public function edittenor($idTenor)
   {
     $data= Tenor::findOrFail($idTenor);
     return view('Admin.EditTenor',compact('data'));
   }

   public function updatetenor($idTenor)
   {
     Tenor::where('idTenor', $idTenor)
     ->update(array(
       'cicilan' => Input::get('cicilan'),
	   'cicilan2' => Input::get('cicilan2'),
     ));
     Session::flash('message', 'Data berhasil diubah');
     return Redirect::to('viewplafond');
   }


}
