<?php

namespace App\Http\Controllers\All;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        $posts = Post::where('avaibility',1)->orderBy('created_at','desc')->get();
        return view('all.welcome' , compact('posts'));
    }
}
