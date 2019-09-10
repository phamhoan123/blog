<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function getAddPostPage(){
        return view('admin.addpost');
    }
}
