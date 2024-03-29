<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;

class PostController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function store(Request $request){
     $post=new Post();
     $post->title=$request->title;
     $post->description=$request->description;
     $post->category_id=$request->category_id;
     $post->user_id=Auth::id();
     $post->save();
     return redirect('/home');
  }
  public function category($id){
    $category=Category::find($id);
    return view('category',compact('category'));
  }
}
