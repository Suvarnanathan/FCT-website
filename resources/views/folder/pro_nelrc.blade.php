<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
.first{
    width:100%;
    margin-top:50px;
    margin-bottom:150px;
}
.fir1{
    width:50%;
    float:left;
}
.fir2{
    margin-left:600px;
}
.fir2 p{
    font-size:13.5px;
}
</style>
</head>
</html>
@extends('layouts.ap')
@section('con')
<div class="first">
    <div class="fir1">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2012/03/04/00/01/background-21717__340.jpg" class="d-block w-100" alt="..." style="height:300px;">
      <div class="carousel-caption d-none d-md-block" style="font-size:15px;margin-top:-20px;">
        <h5>E - Lankapura</h5>
        <p>This is an interactive multimedia application developed to enhance the IT literacy of the public</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i1.trekearth.com/photos/5043/empty_plain.jpg" class="d-block w-100" alt="..."style="height:300px;">
      <div class="carousel-caption d-none d-md-block"style="font-size:15px;margin-top:-20px;">
        <h5>E - Lankapura</h5>
        <p>This is an interactive multimedia application developed to enhance the IT literacy of the public</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://qph.fs.quoracdn.net/main-qimg-85ddd88651add84939721f6c8c7655df" class="d-block w-100" alt="..."style="height:300px;">
      <div class="carousel-caption d-none d-md-block"style="font-size:15px;margin-top:-20px;">
        <h5>E - Lankapura</h5>
        <p>This is an interactive multimedia application developed to enhance the IT literacy of the public.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <div class="fir2">
    <h2>E LANKAPURA</h2>
    <p>This is project being done by National E-learning resource center with the collaboration of Industry Skill Council Sri Lanka. It is a blended learning material which includes audios, videos and interactive activities, providing the users an opportunity to learn by themselves. Here the lessons are taught as a story, followed by a help video. Users can watch the story and learn from help video and try what they learnt in the activities. This helps the student centered learning concept</p>
    <p style="color:blue">E - Lankapura</p>
    </div>
</div>
@endsection