<?php

namespace App\Http\Controllers;
use App\gallery;
use App\courses;
use DB;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Facades\Auth;
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
	   $courses_sort = DB::select('SELECT * FROM galleries GROUP BY courses');
	   $cruds = gallery::all();
	   $dbcourses = Thread::all();
	   $part_threads = DB::select('SELECT p.id, t.subject, t.icon_path, t.color_scheme   FROM participants p INNER JOIN threads t ON p.thread_id=t.id GROUP BY t.subject LIMIT 5 ');
	   $guru = DB::select('SELECT p.id, p.user_id, u.name,u.email, g.guruimg_path, g.status, g.description, u.level FROM participants p INNER JOIN users u ON p.user_id=u.id INNER JOIN threads t ON p.thread_id=t.id INNER JOIN gurus g ON u.guru_id=g.id GROUP BY p.user_id');
	  $pilih = DB::select('SELECT p.id, t.subject, t.icon_path, t.color_scheme from participants p INNER JOIN threads t ON p.thread_id=t.id WHERE p.user_id='.Auth::id().''); 
 	 return view('tampil', compact('dbcourses','cruds', 'guru','courses_sort','part_threads','pilih'));
    }
	
	
}
