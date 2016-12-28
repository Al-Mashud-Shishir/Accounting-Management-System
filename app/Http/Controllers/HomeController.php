<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function Income()
	{
		return view('Features.ViewIncomeStatement');
	}
	public function Balance()
	{
		return view('Features.ViewBalanceSheet');
	}
	public function Journal()
	{
		return view('Features.ViewJournalEntries');
	}
	public function Trial()
	{
		return view('Features.ViewTrialBalance');
	}
	public function General()
	{
		return view('Features.ViewGeneralLedger');
	}
}
