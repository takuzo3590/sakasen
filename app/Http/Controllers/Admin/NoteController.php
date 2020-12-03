<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function add()
    {
        return view('admin.note.create');
    }
    public function create()
    {
        return redirect('admin/note/create');
    }
    public function edit()
    {
        return view('admin.note.edit');
    }
    public function update()
    {
        return redirect('admin/note/edit');
    }
}
