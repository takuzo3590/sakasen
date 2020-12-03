<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
        public function add()
    {
        return view('admin.question.create');
    }
    public function create()
    {
        return redirect('admin/question/create');
    }
}
