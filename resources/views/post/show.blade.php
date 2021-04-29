@extends('layouts.app')

@section('content')
<html>
<title>
</title>
<head>

</head>
<body>

<div class="container">
    <h1>{{($posts->title)}}</h1>
    <div class="mb-3" style="background-image:url('{{asset('image/'.$posts->photos)}}'); height:480px; background-size:cover"></div>
    <b style="font-size:20px" class="card-text">{{($posts->category->name)}}</b>
    <p align="right" style="font-style:italic" class="card-text">{{($posts->created_at)}}</p>                 
    <p style="font-size:20px" class="card-text">{{($posts->author)}}</p>
</div>

</body>


</html>
@endsection