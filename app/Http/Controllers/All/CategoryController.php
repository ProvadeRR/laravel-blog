<?php

namespace App\Http\Controllers\All;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show($slug){
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts->where('avaibility',1)->sortByDesc('created_at');
        return view('all.category',compact('posts'));
    }
    public function all(){
        $categories = Category::all();
        return view('all.categories', compact('categories'));
    }
}
