<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    { 
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();
        
        unset($form['_token']);
        
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }
    public function index(Request $request)
    {
        $cond_coach = $request->$cond_coach;
        if ($cond_coach !=''){
            $posts = Profile::where('name',$cond_coach)->get();
        }else{
            $posts = Profile::all();
        }
        return view('admin.profile.index',['posts' => $posts, 'cond_coach' => $cond_coach]);
    }
    public function update()
    {
        //コーチ情報を追加
        return redirect('admin/profile/edit');
    }
}
