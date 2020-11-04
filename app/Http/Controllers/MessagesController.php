<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Validator;
use DB;

class MessagesController extends Controller
{
    /**
     * Just for testing - the user should be logged in. In a real
     * app, please use standard authentication practices
     */
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */

    /**
     * Shows a message thread.
     *
     * @param $id
     * @return mixed
     */

    public function index()
    {
        return view('admin/index');
    }
    
    public function show($id)
    {
		
	   $participant = Participant::findOrFail($id);	
	 	//show untuk threads semua
	   $embed = DB::select('SELECT * FROM youtubeembeds where participant_id=' . $id . ' ORDER BY id DESC LIMIT 1'); 	//show untuk embed
	   $pelajaran = DB::select('SELECT p.id, p.user_id, u.name,u.email, g.guruimg_path, g.status, g.description, u.level FROM participants p INNER JOIN users u ON p.user_id=u.id INNER JOIN threads t ON p.thread_id=t.id INNER JOIN gurus g ON u.guru_id=g.id  where p.id='.$id.' '); 	//show untuk guru

			
        try {
		$thread = DB::select('SELECT p.id, t.subject, p.thread_id, m.user_id, m.body, m.created_at, u.name, u.email FROM participants p INNER JOIN messages m ON p.id=m.thread_id INNER JOIN threads t ON p.thread_id=t.id INNER JOIN users u ON p.user_id=u.id WHERE p.id=' . $id . ' ORDER BY m.id DESC LIMIT 50'); 	//show untuk message yg ditampilkan
		$detailthread = Thread::findOrFail($participant->thread_id);	//show untuk detail thread
		$teacher = User::findOrFail($participant->user_id);	//show untuk guru
		
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect('messages');
        }

        $userId = Auth::user()->id;
		 $ambilthreads = DB::select('SELECT p.id, t.subject, t.icon_path, t.color_scheme, u.name FROM participants p INNER JOIN threads t ON p.thread_id=t.id INNER JOIN users u ON p.user_id=u.id GROUP BY t.subject LIMIT 5 ');
	
		
        return view('tampilcourses', compact('thread', 'detailthread', 'participant', 'teacher', 'users', 'ambilthreads', 'embed','pelajaran'));
    }

    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
	 
    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return view('messenger.create', compact('users'));
    }

    /**
     * Stores a new message thread.
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        $input = Input::all();
		
		$this->validate($request, [
            'filename' => ['mimes:jpg,jpeg,JPEG,png,gif,bmp,ico', 'max:2024'],
        ]);
		$file       = $input['icon_path'];
		$fileName   = $file->getClientOriginalName();
		$request->file('icon_path')->move("img/coursesicon/", $fileName);
		
        $thread = Thread::create(
            [
                'subject' => $input['subject'],
				'icon_path' => $fileName,
				'color_scheme' => $input['color_scheme'],
				
            ]
        );


        return redirect('admin/createcourses');
    }

 public function ambilcourse(Request $request)
    {
	  // Sender
	  $input = Input::all();
	  $user = User::findOrFail(Auth::user()->id);
	  
	  $threadid       = $input['Courses'];
	  
      
		
		$participant = Participant::firstOrCreate(
            [
                'thread_id' => $threadid,
                'user_id'   => Auth::user()->id,
                'last_read' => new Carbon,
            ]
        );
        $participant->save();
		
		 // Message
        Message::create(
            [
				
                'thread_id' => $participant->id,
                'user_id'   => Auth::user()->id,
                'body'      => 'Selamat Datang Comment Below Here',
            ]
        );
		
		$user->jmlhcourse = $user->jmlhcourse+1;
		$user->save();
		
		return redirect('messages/' . $participant->id);
	}

	 
    /**
     * Adds a new message to a current thread.
     *
     * @param $id
     * @return mixed
     */

    public function edit($id)
    {
     $cruds = Thread::findOrFail($id);
     return view('admin/edit/editcourses', compact('cruds'));
    }


    public function update($id)
    {
        try {
            $thread = Participant::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

            return redirect('messages');
        }


        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::id(),
                'body'      => Input::get('message'),
            ]
        );



        return redirect('messages/' . $id);
    }

    public function destroy($id)
    {
        $cruds = Thread::findOrFail($id);
        $cruds->delete();
return redirect('admin/datacourses');
    }
}
