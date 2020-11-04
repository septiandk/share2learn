<?php

namespace App\Http\Controllers;
use App\youtubeembeds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmbedYoutube extends Controller
{
      public function __construct()
    {
         $this->middleware('auth');
    }
	
	public function store(Request $request)
    {
		$cruds = new youtubeembeds();
		$iduser=Auth::user()->id;
		$cruds->user_id = $iduser;
		$cruds->participant_id = $request->partid;
		$cruds->youtube_link = $request->message;
		$cruds->save();
		return redirect('messages/' . $cruds->participant_id );
    }
}
