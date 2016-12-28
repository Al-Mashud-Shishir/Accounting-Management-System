<?php

namespace App\Http\Controllers;

use App\CompanyData;
use App\user_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InputDataController extends Controller
{

	public function store(Request $request)
	{
		$data=new CompanyData();
		$data->name=Auth::User()->name;
		$data->title=$request->title;
		$data->date=$request->date;
		$data->amount=$request->amount;
		$v=$this->debitCredit($request->question);
		$data->debit=$v['debit'];
		$data->credit=$v['credit'];
		$data->save();

		return view('home')->with('message','1');
	}
	public function debitCredit($value){
		if($value=="1")return array('debit'=>"cash","credit"=>"common_share");
		elseif($value=="2")return array('debit'=>"dividends","credit"=>"cash");
		elseif($value=="3")return array('debit'=>"equipment","credit"=>"cash");
		elseif($value=="4")return array('debit'=>"equipment","credit"=>"a/p");
		elseif($value=="5")return array('debit'=>"cash","credit"=>"rev");
		elseif($value=="6")return array('debit'=>"a/r","credit"=>"rev");
		elseif($value=="7")return array('debit'=>"cash","credit"=>"a/r");
		elseif($value=="8")return array('debit'=>"exp","credit"=>"cash");
		elseif($value=="9")return array('debit'=>"exp","credit"=>"a/p");
		elseif($value=="10")return array('debit'=>"cash","credit"=>"a/p");
		elseif($value=="11")return array('debit'=>"a/p","credit"=>"cash");
	}
	public function getBalanceSheet($name,$start,$end){
		$result=DB::table('company_datas')
			->where('name','=',$name)
			->whereBetween('date',[$start,$end])
			->orderBy('date','asc')
			->select('title','amount','debit','credit')
			->get();
		return $result;
	}
	public function adminLogin(Request $request){
		$result=DB::table('admins')
			->where('password','=',$request->password)
			->where('email','=',$request->email)
			->get();
		if (count($result)==1) {
			return redirect('adminDashboard');
		}
		else{
			return view('admin')->with('message','0');
		}
	}
	public function getExp($name,$start,$end){
		$result=DB::table('company_datas')
			->where('debit','=','exp')
			->where('name','=',$name)
			->whereBetween('date',[$start,$end])
			->orderBy('date','asc')
			->select('title','amount')
			->get();
		return $result;
	}
	public function getRev($name,$start,$end){
		$result=DB::table('company_datas')
			->where('credit','=','rev')
			->where('name','=',$name)
			->whereBetween('date',[$start,$end])
			->orderBy('date','asc')
			->select('title','amount')
			->get();
		return $result;
	}
	public function getJournalEntry($name,$start,$end){
		$result=DB::table('company_datas')
			->where('name','=',$name)
			->whereBetween('date',[$start,$end])
			->orderBy('date','asc')
			->select('date','title','amount','debit','credit')
			->get();
		return $result;

	}
	public function getGeneralLedger($name,$start,$end){
		$result=DB::table('company_datas')
			->where('name','=',$name)
			->whereBetween('date',[$start,$end])
			->orderBy('date','asc')
			->select('amount','debit','credit')
			->get();
		return $result;

	}
	public function showIncome(Request $request){
		$name = Auth::User()->name;
		$r = $this->getExp($name, $request->startdate, $request->enddate);
		$r2 = $this->getRev($name, $request->startdate, $request->enddate);
		return view('Features.ViewIncomeStatement')->with('selected','1')->with('r', $r)->with('r2', $r2);
	}
	public function showBalance(Request $request){
		$name = Auth::User()->name;
		$r = $this->getJournalEntry($name, $request->startdate, $request->enddate);
		return view('Features.ViewBalanceSheet')->with('selected','2')->with('bsheet', $r);
	}
	public function showJournal(Request $request){
			$name = Auth::User()->name;
			$r = $this->getJournalEntry($name, $request->startdate, $request->enddate);
			return view('Features.ViewJournalEntries')->with('selected', '3')->with('journal', $r);
	}
	public function showGeneral(Request $request){
		$name = Auth::User()->name;
		$r = $this->getGeneralLedger($name, $request->startdate, $request->enddate);
		return view('Features.ViewGeneralLedger')->with('selected', '4')->with('general', $r);
	}
	public function showTrial(Request $request){
		$name = Auth::User()->name;
		$r = $this->getGeneralLedger($name, $request->startdate, $request->enddate);
		return view('Features.ViewTrialBalance')->with('selected', '5')->with('trial', $r);
	}
	public function storeComment(Request $request){
		$data=new user_comment();
		$data->email=$request->email;
		$data->comment=$request->comment;
		$data->save();
		return view('welcomeMain')->with('message','1');
	}
}
