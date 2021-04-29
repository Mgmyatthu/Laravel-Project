@extends('layouts.app')
@section('title','Home Index')

@section('content')
    <div class="container p-3">
         @if(session('success'))
            <div>
                <h4>Data Inserted Successfully</h4>
            </div>
        @endif

            <form method="POST" action="{{route('p_store') }}" enctype="multipart/form-data" class="container foom">
            @csrf

                <div>
                    <label class="form-group formm">Title</label>
                    <input class="form-control" type="text" name="title" value="{{old('title')}}">
                    @error('title')
                        <p>{{$message}}</p>
                    @enderror
                </div>  
                <div>
                    <label class="form-group formm">Description</label>
                    <input class="form-control" type="text" name="author" value="{{old('author')}}">
                    @error('author')
                        <p>{{$message}}</p>
                    @enderror
                </div> 
                 <div>
                    <label class="form-group formm">Photos</label>
                    <input class="form-control" type="file" name="photos">
                    
                    @error('photos')
                        <p>{{$message}}</p>
                    @enderror
                </div> 
                <div>
                    <label class="form-group">Myuser</label>
                    <select class="form-control form-select" name="myuser_id" aria-label="Default select example" style="font-size: 13px;">
                                    @foreach($myusers as $key=> $myuser)
                                     <option value="{{$myuser->id}}">
                                       {{$myuser->name}}
                                   </option>
                                    
                                    @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-group">Category</label>
                    <select class="form-control form-select" name="category_id" aria-label="Default select example" style="font-size: 13px;">
                                    @foreach($categories as $key=> $category)
                                     <option value="{{$category->id}}">
                                       {{$category->name}}
                                   </option>
                                   @endforeach
                    </select>
                </div>
                <div>
                    <button class="mt-3 btn btn-primary" type="submit">Save</button>
                </div>          
            </form>    
    </div>
@endsection