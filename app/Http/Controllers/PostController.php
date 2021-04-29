<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Myuser;

class PostController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post=Post::all();        
        return view('home',compact('post'));
    }

    public function gallary()
    {
        //
        $post=Post::all();        
        return view('post.gallary',compact('post'));
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $posts = Post::all();
        $categories=Category::all();
        $myusers=Myuser::all();
        return view('post.post_create', compact('posts','categories','myusers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'photos'=>'required|mimes:jpeg,png,jpg|max:2048',
            'myuser_id'=>'required',
            'category_id'=>'required',
            
        ]);

        $title=$request->title;
        $author=$request->author;
        $file=$request->file("photos");
        $upload=time().'-'.$file->getClientOriginalExtension();
        $file->move(public_path('image'),$upload);
        $myuser_id = $request->myuser_id;
        $category_id = $request->category_id;
       
         
        $table = new Post;
        $table->title = $title;
        $table->author = $author;
        $table->photos = $upload;
        $table->myuser_id=$myuser_id;
        $table->category_id=$category_id;
        $table->save();
        return redirect()->back()->with('success', 'Data inserted successfully');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $posts=Post::find($id);
       return view('post.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
