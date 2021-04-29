<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Contact;
use App\Models\Myuser;
use App\Models\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts=Post::orderby('id','DESC')->paginate('3');
        $category=Category::orderby('id','DESC')->paginate('2');        
        return view('home',compact('posts'));
    }

    public function store(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $message=$request->message;
       
        $table = new Contact;
        $table->name = $name;
        $table->email = $email;
        $table->message = $message;
        $table->save();
        return redirect()->back()->with('success', 'Data inserted successfully');
    }

}
