<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Player;

class PlayerController extends Controller
{
    public function add()
    {
        return view('admin.player.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Player::$rules);
        $player=new Player;
        $form=$request->all();
        if(isset($form['image'])){
            $path=$request->file('image')->store('public/image');
            $player->image_path=basename($path);
        }else{
            $player->image_path=null;
        }
        unset($form['_token']);
        unset($form['image']);
        $player->fill($form);
        $player->save();
        
        return redirect('admin/player/create');
    }
    public function edit()
    {
        return view('admin.player.edit');
    }
    public function update()
    {
        return redirect('admin/player/edit');
    }
}