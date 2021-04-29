@extends('layouts.app')

@section('content')
<html>
<title>
</title>
<head>

</head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<style>
    .imgdiv:hover{
        transform: scale(1.3);
        transition: 0.9s ease;
    }
    .imgdiv{
        transform: scale(1);
        transition: 0.9s ease;
    }
    .mycard{
        border:none;
        border-bottom:1px solid;
        width:100%;
    }
    .my-thumb{
        border:none;
    }
    .contact-icon{
        margin-right:20px;
        font-size:18px; 
    }
    .icard{
        overflow:hidden;
        border:none;
        border-bottom-left-radius:0px;
        border-bottom-right-radius:0px;
    }
</style>
<body>

<div class="container">
    <div class="row">
        @foreach($posts as $key=> $post)
            <div class="col-md-4">
                <div class="card mycard  mx-auto">
                        <div class="card icard">
                            <a href="{{url('/show',$post->id)}}"><div class="imgdiv" style="background-image:url('{{asset('image/'.$post->photos)}}'); height:200px; background-size:cover"></div></a>
                        </div>
                    <div class="card-body">
                        <h5 style="font-weight:bold" class="card-title">{{($post->title)}}</h5>
                        <b class="card-text">{{($post->category->name)}}</b>
                        <p align="right" style="font-style:italic;font-size:10px;" class="card-text">{{($post->created_at)}}</p>                 
                        <p class="card-text">{{Str::limit($post->author,80)}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Middle photos -->
<div class="container"> 
    <div class="mt-5" style="background-image:url('{{asset('image/Red56d982821bf3cdf3d8bc7dfd72f442.jpg')}}'); height:320px; background-size:cover"></div>
</div>
<!-- end of middle photos -->

<!-- next -->
<div class="container mt-5">
    <div class="row">
        @foreach($posts as $key=> $post)
            <div class="col-md-4">
                <div class="card mycard  mx-auto">
                        <div class="card icard">
                        <a href="{{url('/show',$post->id)}}"><div class="imgdiv" style="background-image:url('{{asset('image/'.$post->photos)}}'); height:200px; background-size:cover"></div></a>
                        </div>
                    <div class="card-body">
                        <h5 style="font-weight:bold" class="card-title">{{($post->title)}}</h5>
                        <b class="card-text">{{($post->category->name)}}</b>
                        <p align="right" style="font-style:italic;font-size:10px;" class="card-text">{{($post->created_at)}}</p>                 
                        <p class="card-text">{{Str::limit($post->author,80)}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        @foreach($posts as $key=> $post)
            <div class="col-md-4">
                <div class="card mycard  mx-auto">
                        <div class="card icard">
                        <a href="{{url('/show',$post->id)}}"><div class="imgdiv" style="background-image:url('{{asset('image/'.$post->photos)}}'); height:200px; background-size:cover"></div></a>
                        </div>
                    <div class="card-body">
                        <h5 style="font-weight:bold" class="card-title">{{($post->title)}}</h5>
                        <b class="card-text">{{($post->category->name)}}</b>
                        <p align="right" style="font-style:italic;font-size:10px;" class="card-text">{{($post->created_at)}}</p>                 
                        <p class="card-text">{{Str::limit($post->author,80)}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- end next -->


<!-- Square Photos -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img class="img-thumbnail my-thumb" src="{{asset('image/Sunset-Photos.jpg')}}">
        </div>
        <div class="col-md-6">
            <h3><b>About The Nature</b></h3>
            <p style="font-size:20px">Brigadier General Nyo Twan Awng is the deputy leader of the United League of Arakan and the Vice Commander-in-Chief of the Arakan Army. Nyo Tun Aung was born Zaw Myo Thet on 4 March 1981 in Kyaukpyu, Rakhine State, Myanmar. During his teenage years, he attended medical studies in Yangon. He received his doctorate from Dagon University. In 2009, the Arakan Army was founded and Nyo became one of its first members, attending the group's first training session.</p>
        </div>
    </div>
</div>
<!-- End Square Photos -->


<!-- Row Photos -->
<div class="container mt-5">
    @foreach($posts as $key=>$post)
        <div class="row mt-5">
            <div class="col-md-5" style="background-image:url('{{asset('image/'.$post->photos)}}'); height:250px; background-size:cover"></div>
            <div class="col-md-7">
            <h5 style="font-weight:bold" class="card-title">{{($post->title)}}</h5>
                <b class="card-text">{{($post->category->name)}}</b>
                <p align="right" style="font-style:italic;font-size:10px;" class="card-text">{{($post->created_at)}}</p>                 
                <p class="card-text">{{Str::limit($post->author,80)}}</p>
                        
                <a  href="{{url('/show',$post->id)}}" class="btn btn-primary">Continue Reading</a>
            </div>
        </div>
    @endforeach
</div>
<!-- End of Row photos -->

<!-- Gallery -->
<div class="container mt-5">
    <div class="row">
        @foreach($posts as $key=>$post)
            <div class="col-md-4" style="background-image:url('{{asset('image/'.$post->photos)}}'); height:250px; background-size:cover;border:2px solid #f8fafc"></div>
        @endforeach
    </div>
</div>
<!-- End Gallery -->


<!-- Contant Box -->
<div class="mt-5">
    <div style="background: #ECECEC; padding-top: 50px;">
        <div class="container contact-container">
          <h3 class="army-color title-font">CONTACT US</h3>
          <!-- start row part -->
          <div class="row" style="margin-top: 100px;">
              <!-- start left column part -->
              <div class="col-md-12 col-lg-4" style="padding-top:5px; padding-bottom:50px"> 
                  <!-- contact div -->
                  <div class="home-contact">
                      <p><i class="fas fa-briefcase contact-icon"></i>&nbsp;<a href="https://www.arakanarmy.net" target="_blank">Arakan Army</a></p>
                      
                      <p><i class="fas fa-envelope contact-icon"></i>info@drnyotwanawng.com</p>
                      <p><i class="fab fa-wordpress contact-icon"></i>&nbsp;<a href="https://www.drnyotwanawng.com">https://www.drnyotwanawng.com</a></p>
                      <p><i class="fab fa-vk contact-icon"></i><a href="https://vk.com/drnyo" target="_blank">https://vk.com/drnyo</a></p>
                  </div>
                  <!-- end contact div -->
              </div>
              <!-- end left column part -->
              <!-- right column part -->
              <div class="col-md-12 col-lg-8">
                <div id="app">
                    <div><!----> <!----> 
                        <form method="POST" action="{{route('contact')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" placeholder="Name Here *" class="form-control"> 
                                        <div class="text-danger"><!----></div>
                                </div> 
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" placeholder="Email Here *" class="form-control"> 
                                        <div class="text-danger"><!----></div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <textarea cols="30" rows="10" name="message" placeholder="Message Here *" class="form-control"></textarea> 
                                    <div class="text-danger"><!----></div>
                            </div> 
                            <div class="form-group float-right"><input type="submit" value="SEND MESSAGE" class="btn btn-primary my-primary">
                            </div>
                        </form>
                    </div>
                </div>
              </div>
              <!-- end right column part -->
          </div>
          <!-- end row part -->
      </div>
    </div>
</div>
<!-- End Content Box -->

</body>


</html>
@endsection

