<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;
use DB;
use App\Http\Requests;
use Validator;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admins');
    }
    public function index()
    {
	
        return view('admin/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
    {
       return view('admin/Process/creategallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {
     $cruds = new gallery();
	 
	
		
	 $validator = Validator::make($request->all(), [
            'filename' => 'image|mimes:jpg,jpeg,JPEG,png,gif,bmp|max:2024',
        ]);
	
	if($validator->fails()){
		return redirect('/admin/Process/crudgallery')
			->withErrors($validator)
			->withInput();
	}
		
 	$cruds->courses = $request->courses;
	
	$file       = $request->file('filename');
	
	$fileName   = $file->getClientOriginalName();
	$request->file('filename')->move("gallery/", $fileName);
	$cruds->picture_path = $fileName;
	
	$cruds->save();
	 return redirect('admin/creategallery');
    }
	
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	 $cruds = gallery::findOrFail($id);
	 return view('editgallery', compact('cruds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   $cruds = gallery::findOrFail($id);
   $cruds->courses = $request->courses;
    if(!empty($request->file('filename'))){

	$this->validate($request, [
		'filename' => ['mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024'],
	]);		
	
	    

 	$cruds->courses = $request->courses;
	$file       = $request->file('filename');
	


		$image = \DB::table('galleries')->where('id', $id)->first();
        $hapus= $image->picture_path;
        $remove = public_path().'/gallery/'.$hapus;
        \File::delete($remove);
    

	$fileName   = $file->getClientOriginalName();
	$request->file('filename')->move("gallery/", $fileName);
	$cruds->picture_path = $fileName;
	}
 	$cruds->save();
 	return redirect()->route('crudgallery.index')->with('alert-success', 'Data Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cruds = gallery::findOrFail($id);
		
	if(!empty($cruds->picture_path)){
		$image = \DB::table('galleries')->where('id', $id)->first();
        $hapus= $image->picture_path;
        $remove = public_path().'/gallery/'.$hapus;
        \File::delete($remove);
    }
		
 $cruds->delete();
 return redirect()->route('crudgallery.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
