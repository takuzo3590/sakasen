<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        dd('add');
        return view('admin.profile.create');
    }
    public function create()
    { 
       return redirect('admin/profile/create');
    }
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update()
    {
        //コーチ情報を追加
        return redirect('admin/profile/edit');
    }
}
