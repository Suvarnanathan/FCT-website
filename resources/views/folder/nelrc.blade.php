<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>

.two{
  width:20%;

  float:left;
  margin-left:4%;
}
.three{
  width:20%;
  
  float:left;
  margin-left:4%;
}
.four{
  width:20%;
  
  float:left;
  margin-left:4%;
}
.five{
  width:20%;
 
  float:left;
  margin-left:4%;
}

  div div.fo1:hover img{
    opacity:0.4; 
    cursor:pointer;
   

     }
    div div.fo2:hover img{
    opacity:0.5;  }
    div div.fo3:hover img{
    opacity:0.5;  }
    div div.fo4:hover img{
    opacity:0.5; 
    }
    div div.fo1:hover .fo11{
    visibility: visible;

 margin-top:-150px;
 margin-left:80px;
 border: 2px solid red;
  border-radius: 35%;
  color:white;
  float:left;
  }
  #id1:hover{
    visibility: visible;

 background-color:red;
  }


  div div .fo11{
    visibility:hidden;
  }
  div div.fo1:hover .fo12{
    visibility: visible;
float:left;
margin-top:-150px;
 margin-left:160px;
 border: 2px solid red;
  border-radius: 35%;
  
  }

  div div .fo12{
    visibility:hidden;
  }
  div div.fo1:hover .fo13{
    visibility: visible;
float:left;
margin-top:-120px;
 margin-left:50px;
 text-align:center;
 
  }

  div div .fo13{
    visibility:hidden;
  }

.sp-scroll-up {
    
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    font-size: 16px;
    color: #fff;
    background: #333;
    border-radius: 3px;
    z-index: 1000;
}
.sp-scroll-up:hover, .sp-scroll-up:active, .sp-scroll-up:focus {
    color: #fff;
    background: #444;
}
*, ::after, ::before {
    box-sizing: border-box;
}
 a#id5{
  color:red;
}
a#id5:hover{
  color:black;
}
</style>
<script>
$(document).ready(function(){
  $("#id16").hover(function(){
    $("#id16").fadeIn(3000);
  });
});
</script>
</head>
</html>

@extends('layouts.ap')
@section('content')
  <img src="https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/tnc_86887171.jpg?crop=0,176,3032,1667&wid=4000&hei=2200&scl=0.758" style="height:500px;width:121%;margin-left:-115px;position:static;">
  
  <div class="card mb-3"style="border:none;margin-top:40px;">
  <div class="row no-gutters" >
    <div class="col-md-4" >
      <img src="http://nelrc.kln.ac.lk/images/2019/02/26/first-img.jpg" style="height:350px;position:relative;" class="card-img" alt="...">
    </div>
    <div class="col-md-8" >
      <div class="card-body" style="width:500px">
        <h5 class="card-title" style="font-size:40px;margin-top:-25px;"><b>About NELRC</b></h5>
        <p class="card-text"><ul>
        <li><p>National e-Learning Resource Center (NELRC) is established under <a href="http://fct.kln.ac.lk/FCT"> Faculty of Computing and Technology (FCT) – University of Kelaniya</a>with the ultimate goal of fulfilling national requirements of e-Learning</li>
        <li>The center is engaged in testing of educational software, tools and resources, integration of audio-visual material and evaluation about the impact of new technology in education.</li>
        <li>We provide consulting services, trainings, support for implementation and assessment and assistance with integration of e-learning processes to curricula.

</li></ul></p>
        </p>
       
      </div>
    </div>
  </div>
</div>
<div class="one" style="height:450px;background-color:rgb(211,211,211);width:121%;margin-left:-115px;">
<h3 style="text-align:center">OUR SERVICES</h3>
<div class="two">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSiiCTjzE3C6VcBeVfgc12GCFUatTaLvtAyr_ARiZYSrEbF0PfC">
<p style="text-align:center;font-size:20px;"><b>Support</b></p>
<p style="text-align:center;"><b>We support for the sustainable development of e-Learning in the country in numeric ways.</b></p>
</div>
<div class="three">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSiiCTjzE3C6VcBeVfgc12GCFUatTaLvtAyr_ARiZYSrEbF0PfC">
<p style="text-align:center;font-size:20px;"><b>Research</b></p>
<p style="text-align:center;"><b>Our staff at NELRC carries out research and studies about Virtual Learning and e-Learning.</b></p>
</div>
<div class="four">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSiiCTjzE3C6VcBeVfgc12GCFUatTaLvtAyr_ARiZYSrEbF0PfC">
<p style="text-align:center;font-size:20px;"><b>Consulting</b></p>
<p style="text-align:center;"><b>We provide consultancy services for e-Learning in many aspects including setup infrastructure, content development and delivery etc..</b></p>
</div>
<div class="five" style="margin-right:4%;">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSiiCTjzE3C6VcBeVfgc12GCFUatTaLvtAyr_ARiZYSrEbF0PfC">
<p style="text-align:center;font-size:20px;"><b>Training</b></p>
<p style="text-align:center;"><b>NELRC helps to build human resources who can meet the expectatoins of the next generation.</b></p>
</div>
</div>
<h3 style="text-align:center;margin-top:40px;margin-bottom:40px;">NEWS EVENTS</h3>
<div class="for" style="margin-left:2%;margin-right:2%;" id="id16">
<div class="fo1" style="width:20%;float:left;"><img style="margin-left:-40px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT11HMJfEHgPVGhZv0IEoUIe282-nadiB21gqGm6o4NMN2GyxgK">
<div class="fo11"><a  id="id5" href="">zoom</a>
</div>


<div class="fo12">
<a href="" style="color:red;">view</a>  
</div>
<div class="fo13">
<a href="#" style="color:black;">E-Learning content development work shop session 1</a>
<p>office</p>
</div>
</div>
<div class="fo2" style="width:20%;float:left;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT11HMJfEHgPVGhZv0IEoUIe282-nadiB21gqGm6o4NMN2GyxgK"style="margin-left:25px;"></div>
<div class="fo3" style="width:20%;float:left;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT11HMJfEHgPVGhZv0IEoUIe282-nadiB21gqGm6o4NMN2GyxgK" style="margin-left:90px;"></div>
<div class="fo4" style="width:20%;float:left;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT11HMJfEHgPVGhZv0IEoUIe282-nadiB21gqGm6o4NMN2GyxgK" style="margin-left:155px;"></div>
</div>
<a href="#" class="sp-scroll-up" aria-label="Scroll Up" style="display: block;"><span class="fa fa-chevron-up" aria-hidden="true"></span></a>
@endsection