<?php

namespace App\Http\Controllers;
use App\guru;
use App\Admin;
use App\User;
use Cmgmyr\Messenger\Models\Thread;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }
	
	public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function activity()
    {
        return view('admin/tables/activity');
    }
    public function chart()
    {
        return view('admin/tables/chart');
    }

	public function dataguru()
	{
		$dbguru = guru::all();
		return view('admin/tables/dataguru', compact('dbguru'));
	}
	
	public function datauser()
	{
		$dbuser = User::all();
		return view('admin/tables/datauser', compact('dbuser'));
	}
	
	
	public function datacourses()
	{
		$dbcourses = Thread::all();
		return view('admin/tables/datacourses', compact('dbcourses'));
	}
	
	public function createcourses()
	{
		return view('admin/Process/createcourses');
	}
	
	public function createguru()
	{
		return view('admin/Process/createguru');
	}
	
	public function creategallery()
	{
		return view('admin/Process/creategallery');
	}

}
