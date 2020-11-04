<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
use App\User;
use DB;
use App\Http\Requests;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class GuruController extends Controller
{
    use RegistersUsers;
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
       return view('admin/Process/createguru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
     $cruds = new guru();
     $login = new User();
        
     $validator = Validator::make($request->all(), [
            'filename' => 'image|mimes:jpg,jpeg,JPEG,png,gif,bmp|max:2024',
        ]);
    
    if($validator->fails()){
        return redirect('crudguru/create')
            ->withErrors($validator)
            ->withInput();
    }
        
    $cruds->namaguru = $request->namaguru;
    $cruds->status = $request->status;
    $cruds->description = $request->description;
    $cruds->email = $request->email;
    $file       = $request->file('filename');
    
    $fileName   = $file->getClientOriginalName();
    $request->file('filename')->move("img/guru/", $fileName);
    $cruds->guruimg_path = $fileName;
    
    $cruds->save();
    
    
    /* login create */
	$login->guru_id = $cruds->id;
    $login->name = $request->namaguru;
    $login->email = $request->email;
    $login->level = "guru";
    $login->password = bcrypt($request->password);
    
    $login->save();
    return redirect('admin/createguru');
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
	 $cruds = guru::findOrFail($id);
	 return view('admin/edit/editguru', compact('cruds'));
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
   $cruds = guru::findOrFail($id);

	$this->validate($request, [
		'filename' => ['mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024'],
	]);		
	
 	$cruds->namaguru = $request->namaguru;
	$cruds->status = $request->status;
	$cruds->description = $request->description;
	$file       = $request->file('filename');
	
	if(!empty($request->file('filename'))){


		$image = \DB::table('gurus')->where('id', $id)->first();
        $hapus= $image->image_guru;
        $remove = public_path().'/img/guru/'.$hapus;
        \File::delete($remove);
    

	$fileName   = $file->getClientOriginalName();
	$request->file('filename')->move("img/guru/", $fileName);
	$cruds->image_guru = $fileName;
	}
 	$cruds->save();
 	return redirect()->route('crudguru.index')->with('alert-success', 'Data Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cruds = guru::findOrFail($id);

		
	if(!empty($cruds->image_guru)){
		$image = \DB::table('gurus')->where('id', $id)->first();
        $hapus= $image->image_guru;
        $remove = public_path().'/img/guru/'.$hapus;
        \File::delete($remove);
    }
 $cruds->delete();
	User::where('level', '=', 'guru')->delete();
  return redirect('admin/dataguru');
    }
}
