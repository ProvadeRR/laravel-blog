<?php

namespace App\Http\Controllers\All;

use App\Models\Comentary;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function full($category_slug, $post_slug){
        $post = Post::where('slug', $post_slug)->first();
        $comentaries = Comentary::where('post_id', $post->id)->orderBy('created_at','desc')->get();
        return view('all.fullpost', compact('post','comentaries'));
    }
}
