<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Note;
use Auth;

class NoteController extends Controller
{
    public function add()
    {
        return view('admin.note.create');
    }
    public function create(Request $request)
    {
        //varidation
        $this->validate($request, Note::$rules);
        $note = new Note;
        $form = $request->all();
        
        //動画があれば保存
        if (isset($form['movie'])){
            $path =$request->file('movie')->store('public/movie');
            $note->movie = basename($path);
        } else {
            $note->movie = null;
        }
        
        unset($form['_token']);
        unset($form['movie']);
        $note->user_id=Auth::id();
        
        $note->fill($form);
        $note->save();
        
        return redirect('admin/note/create');
    }
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != ''){
            $posts = Note::where('name', $cond_name)->get();
        }else{
            $posts = Note::all();
        }
        return view('admin.note.index',['posts' => $posts, 'cond_name' => $cond_name]);
    }
    public function update()
    {
        return redirect('admin/note/edit');
    }
}
