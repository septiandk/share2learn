<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Facades\Auth;
use App\gallery;
use App\User;
use App\courses;
use DB;


class IndexController extends Controller
{

	public function index()
	{
		return view('front_login');
	}
/*	gak dipake sepertinya
public function landing()
	{
	$this->middleware('auth');
	 $courses_sort = DB::select('SELECT * FROM galleries GROUP BY courses');
	 $threads = DB::select('SELECT * FROM threads GROUP BY id');
	
	 $cruds = gallery::all();
	 $dbcourses = Thread::all();
 	 return view('tampil', compact('dbcourses','cruds','courses_sort','threads'));
	}
*/
	public function about()
	{
		return view('about');
	}
	
	public function courses()
	{
		$iduser=Auth::user()->id;
		$threads = DB::select('SELECT * FROM  threads t WHERE  NOT EXISTS ( SELECT * from participants p WHERE p.thread_id=t.id AND p.user_id=' . $iduser . ')'); //untuk ambilcourse
		$pilih = DB::select('SELECT p.id, t.subject, t.icon_path, t.color_scheme from participants p INNER JOIN threads t ON p.thread_id=t.id WHERE p.user_id=' . $iduser . ''); 
		//untuk course yg sudah diambil
		
		$user = User::findOrFail($iduser);
		return view('courses', compact('user','threads', 'pilih'));
	}
	
	
	public function contact()
	{
		return view('contact');
	}

	public function profil()
	{
		$cruds = User::findOrFail(Auth::user()->id);
		return view('tampilProfil', compact("cruds"));
	}
public function viewprofil()
	{
		$cruds = User::findOrFail(Auth::user()->id);
		return view('profil/overview', compact("cruds"));
	}
	
	

}
