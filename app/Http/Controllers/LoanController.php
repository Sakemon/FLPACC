<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plafond;
use App\Http\Requests;
use Input;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Tenor;
use App\Temporary;
use App\Customer;
use Validator;
use Carbon\Carbon;
use App\Car;
use App\TenorCar;
class LoanController extends Controller
{

  public function CreditProgram($idplafond)
  {
    $plafond = Plafond::where('plafond.idplafond',$idplafond)->first();
    $tenor = Tenor::where('tenor.idplafond',$idplafond)->get();

    return view('Loan.CreditProgram', compact(['plafond','tenor']));
  }
  
  public function CreditMgu()
  {
    $tenor = Tenor::join('plafond','tenor.idPlafond','plafond.idPlafond')
	  ->where('plafond.flagType','MGU')
	  ->orderby('plafond.namaPlafond')->get();

    return view('Loan.CreditMgu', compact('tenor'));
  }
  
  public function CreditMguAcc()
  {
    $tenor = Tenor::join('plafond','tenor.idPlafond','plafond.idPlafond')
	  ->where('plafond.flagType','MGU')
	  ->orderby('plafond.namaPlafond')->get();

    return view('Loan.CreditMguAcc', compact('tenor'));
  }

  public function FlpMenu()
  {
    return view('Loan.DoubleChoice');
  }
  
  public function loan(Request $req)
  {
    $plafond = $req->input('plafond');
    $tenor = Input::get('tenor');
    $linkplafond = Plafond::where('plafond.idplafond',$plafond)->first();

    return view('Loan.LoanCustomer', compact(['plafond', 'tenor', 'linkplafond']));
  }
  
  public function LoanEmployee(Request $req)
  {
    $plafond = $req->input('plafond');
    $tenor = Input::get('tenor');
    $linkplafond = Plafond::where('plafond.idplafond',$plafond)->first();

    return view('Loan.LoanEmployee', compact(['plafond', 'tenor', 'linkplafond']));
  }

  public function submit(Request $req)
  {
    $data = new Customer;
    $data->nama = Input::get('nama');
    $data->email = Input::get('email');
    $data->phone = Input::get('phone');
    $data->idPlafond = $req->input('plafond');
    $data->idTenor = $req->input('tenor');
    $data->flag = 0;
    $data->save();

    return view('Loan.LoanView');
  }
  
  public function submitmgu(Request $req)
  {
    $data = new Customer;
	  $data->statusKaryawan = $req->input('status');
    $data->nama = Input::get('nama');
	  $data->email = '-';
	  $data->phone = '-';
    $data->npk = Input::get('npk');
    $data->cabang = Input::get('cabang');
    $data->idPlafond = $req->input('plafond');
    $data->idTenor = $req->input('tenor');
    $data->flag = 0;
    $data->save();

    return view('Loan.LoanView');
  }

  public function ViewCatalogue(){
    $data = Car::all();
    return view('Loan.ViewCatalogue', compact('data'));
  }

  public function ViewPerCar($idCar)
  {
    $car = Car::where('car.idCar',$idCar)->first();
    $tenorcar = TenorCar::where('tenorcar.idCar',$idCar)->get();
    $img = 'public/images/'.$idCar.'.png';

    return view('Loan.ViewPerCar', compact(['car','tenorcar','img']));
  }

}
