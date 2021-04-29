<?php

namespace App\Http\Controllers;
use App\Models\Myuser;
use Illuminate\Http\Request;

class MyuserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $myusers=Myuser::all();
        // dd($posts);
         return view('myuser.myuser_index',compact('myusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('myuser.myuser_create');
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
            'photos'=>'required|mimes:jpeg,png,jpg|max:2048',
            'bio'=>'required'
        ]);
        //
        $name=$request->name;
        $file=$request->file("photos");
        $upload=time().'-'.$file->getClientOriginalExtension();
        $file->move(public_path('image'),$upload);
        $bio=$request->bio;
        //obj
        $table=new Myuser;
        $table->name=$name;  
        $table->photos=$upload;
        $table->bio=$bio;
        $table->save();
        
        return redirect()->back()->with('success','Data','inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
