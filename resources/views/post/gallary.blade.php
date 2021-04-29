@extends('layouts.app')

@section('content')
<html>
<title>
</title>
<head>

</head>
<body>

<!-- Gallery -->
<div class="container mt-5">
    <div class="row">
        @foreach($post as $key=>$post)
            <div class="col-md-4" style="background-image:url('{{asset('image/'.$post->photos)}}'); height:250px; background-size:cover;border:2px solid #f8fafc"></div>
        @endforeach
    </div>
</div>
<!-- End Gallery -->

</body>


</html>
@endsection