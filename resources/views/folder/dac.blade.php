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
@section('contentss')
<p style="margin-left:-100px;">Department of Applied Computing</p>
<p style="margin-left:200px;font-size:25px;"><b>DEPARTMENT OF APPLIED COMPUTING</b></p>
<hr style="margin-left:300px;margin-right:500px; background-color:red"/>
<div class="card mb-3" style="max-width: 540px;border:none;margin-left:-100px;margin-top:80px;">
  <div class="row gutters">
    <div class="col-md-4" id="id3">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Thilini.jpg" class="card-img" alt="Dr.thilini">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2016/09/Dr.Chamli.jpg" class="card-img" alt="Dr.chamli">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Asanka.jpg" class="card-img" alt="Dr.asanka">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Laalitha.jpg" class="card-img" alt="Dr.laalitha">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Pradeep.jpg" class="card-img" alt="Dr.pradeep">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/06/New-Shakya.jpg" class="card-img" alt="Mr.shakya">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2018/10/Dilini.jpg" class="card-img" alt="Mrs.dilini">
    </div>
    <div class="col-md-8">
    <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.(Mrs) Thilini Rupasinghe</a></h5>
        <p class="card-text" >PhD (Iowa, USA), MSc (Iowa, USA), BSc (Special) Hons (Colombo, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade II) in Nanomaterials</p>
       
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Chamli Pushpakumara</a></h5>
        <p class="card-text" >PhD (Sheffield Hallam University, UK), BSc (Kelaniya)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I)</p>
       
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;margin-top:60px;">
        <h5 class="card-title"><a href="">Dr.Asanka.Pallewatta</a></h5>
        <p class="card-text">PhD (Risø DTU, Denmark), MEng (Gifu, Japan), BEng (Gifu, Japan), Dip.in Fashion Design (SriLanka)</p>
        
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;margin-top:60px;">
        <h5 class="card-title"><a href="">Dr.Laalitha S.I.Liyanage</a></h5>
        <p class="card-text" >PhD (Mississippi, USA), MSc (Mississippi, USA), BSc (Special) Hons (Peradeniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade II) in Computational Nanotechnology</p>
      
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;margin-top:60px;">
        <h5 class="card-title"><a href="">Dr.Pradeep Samarasekere</a></h5>
        <p class="card-text" >PhD (Houston, USA), BSc (Special) Hons (Colombo, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade II) in Materials and Process Chemistry</p>
     
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;margin-top:30px;">
        <h5 class="card-title" style="margin-top:90px;"><a href="">Mr.Shakya Bandara</a></h5>
        <p class="card-text" >BTech (Eng) (Hons) (OUSL, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
       
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title" style="margin-top:70px;"><a href="">Mrs.W.A.Dilini Nishadika Gunadilake</a></h5>
        <p class="card-text" >Bachelor of Science of Engineering (Honors)(Mechanical)(Moratuwa, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
      </div>
      </div>
  </div>
</div>

@endsection