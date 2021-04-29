@extends('layouts.app')
@section('title','Home Index')

@section('content')
    <div class="container p-3">
         @if(session('success'))
            <div>
                <h4>Data Inserted Successfully</h4>
            </div>
        @endif

            <form method="POST" action="{{route('category_store')}}" enctype="multipart/form-data" class="container foom">
            @csrf

                <div>
                    <label class="form-group formm">Name</label>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>  
                 <div method="POST" action="{{route('category_store')}}" enctype="multipart/form-data">
                    <label class="form-group formm">Photos</label>
                    <input class="form-control" type="file" name="photos">
                    
                    @error('photos')
                        <p>{{$message}}</p>
                    @enderror
                </div>   
                <div>
                    <label class="form-group formm">Address</label>
                    <input class="form-control" type="text" name="address" value="{{old('address')}}">
                    @error('address')
                        <p>{{$message}}</p>
                    @enderror
                </div>    
                <div>
                    <button class="mt-3 btn btn-primary" type="submit">Save</button>
                </div>          
            </form>    
    </div>
@endsection