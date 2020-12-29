<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function add()
    {
        return view('admin.team.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Team::$rules);
        $team = new Team;
        $form = $request->all();
        
        unset($form['_token']);
        unset($form['team']);
        
        $team->user_id=Auth::id();
        $team->fill($form);
        $team->save();
        
        return redirect('admin/team/create');
    }
    public function edit()
    {
        return view('admin.team.edit');
    }
    public function update()
    {
        return redirect('admin/team/edit');
    }
}
