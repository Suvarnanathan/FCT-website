<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
#id1 p#id2{

    margin-top:-12px;
}
#id1 a{
    color:black;
}
#id1 a:hover{
    color:orange;
}
#id3 img{
    margin-top:10px;
}
#id1 h5{
    margin-top:30px;
}
</style>
</head>
</html>
@extends('layouts.app')
@section('dce')
<p style="margin-left:-100px;">Department of Computer Systems Engineering</p>
<p style="margin-left:200px;font-size:25px;"><b>DEPARTMENT OF COMPUTER SYSTEMS ENGINEERING</b></p>
<hr style="margin-left:300px;margin-right:500px; background-color:red"/>
<div class="card mb-3" style="max-width: 540px;border:none;margin-left:-100px;margin-top:80px;">
  <div class="row gutters">
    <div class="col-md-4" id="id3">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Dhammika.jpg" class="card-img" alt="Dr.dhammika">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2016/09/Prof.Dias_.jpg" class="card-img" alt="prof.Dias">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/11/Thilini-Yatanwala_1.jpg" class="card-img" alt="Mrs.thilini">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2018/10/Nisal.jpg" class="card-img" alt="Mr.nisal">
    </div>
    <div class="col-md-8">
    <div class="card-body" id="id1"style="width:270%;border:none;margin-top:-20px;">
        <h5 class="card-title"><a href="">Dr.Hesiri Dhammika Weerasinghe</a></h5>
        <p class="card-text" >PhD (Oakland, USA), MSc (Oakland, USA), BSc (Special) (Kelaniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I) in Computer Science</p>
        <p class="card-text" id="id2">Head/ Department of Computer Systems Engineering</p>
        
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Prof.N.G.J.Dias</a></h5>
        <p class="card-text" >PhD (Wales, UK), MSc (Belfast, UK), B.Sc. (Special) (Colombo, SriLanka), MBCS, MIEEE.</p>
        <p class="card-text" id="id2">Senior Professor in Computer Science</p>
        
      </div>

      <div class="card-body" id="id1"style="width:270%;border:none;margin-top:20px;">
        <h5 class="card-title"style="margin-top:50px;"><a href="">Mrs.Thilini Yatanwala</a></h5>
        <p class="card-text" >BSc (IT) Hons (Moratuwa, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary) in Computer Science</p>
        
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;margin-top:30px;">
        <h5 class="card-title" style="margin-top:70px;"><a href="">Mr.U.K.D Nishal Manisha</a></h5>
        <p class="card-text" >B.Sc. (special) in Computer Science (Kelaniya, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
        
      </div>
      </div>
  </div>
</div>
@endsection