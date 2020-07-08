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
@section('dse')
<p style="margin-left:-100px;">Department of Software Engineering</p>
<p style="margin-left:200px;font-size:25px;"><b>DEPARTMENT OF  SOFTWARE ENGINEERING</b></p>
<hr style="margin-left:300px;margin-right:500px; background-color:red"/>
<div class="card mb-3" style="max-width: 540px;border:none;margin-left:-100px;margin-top:80px;">
  <div class="row gutters">
    <div class="col-md-4" id="id3">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Sidath.jpg" class="card-img" alt="Dr.sidharth">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2016/09/Dr.Carmel.jpg" class="card-img" alt="Dr.Carmel">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/03/Dr.Gamini-2.jpg" class="card-img" alt="Dr.gamini">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/DSC05272.jpg" class="card-img" alt="Mr.chathura">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/DSC05269.jpg" class="card-img" alt="Ms.hiroshika">
    <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2018/10/Hansi.jpg" class="card-img" alt="Mrs.hansi">
    </div>
    <div class="col-md-8">
    <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.S.R.Liyanage</a></h5>
        <p class="card-text" >PhD (NUS, Singapore), MPhil (Peradeniya, SriLanka), BSc (Special) (Kelaniya, SriLanka), MIEEE</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I) in Computer Science</p>
        <p class="card-text" id="id2">Head / Department of Software Engineering</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title" style="margin-top:30px;"><a href="">Dr.(Mrs) M.C. wijegunasekara</a></h5>
        <p class="card-text" >PhD (Wales, UK), MSc (Wales, UK), BSc (Special) (Kelaniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I) in Computer Science</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Gamini Wijayarathna</a></h5>
        <p class="card-text" >DrEng (Electro-Communications, Japan), MEng (Electro-Communications, Japan), BSc (Kelaniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I)</p>
        <p class="card-text" id="id2">Dean / Faculty of Computing and Technology</p>
        </div>
        <div class="card-body" id="id1"style="width:270%;border:none;margin-top:30px;">
        <h5 class="card-title"><a href="">Mr.Chathura Priyankara</a></h5>
        <p class="card-text" >BSc (IT) Hons (Moratuwa, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
        </div>
        <div class="card-body" id="id1"style="width:270%;border:none;margin-top:30px;">
        <h5 class="card-title"style="margin-top:50px;"><a href="">Ms. Hiroshika Nadeeshani Premarathne</a></h5>
        <p class="card-text" >MSc (SLIIT, Sri Lanka), BSc in IT(Special) Hons (SLIIT, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary) in Computer Science</p>
        </div>
        <div class="card-body" id="id1"style="width:270%;border:none;margin-top:15px;">
        <h5 class="card-title" style="margin-top:70px;"><a href="">Mrs.Hansi Udapola</a></h5>
        <p class="card-text" >B.Sc. (special) in Computer Science (Kelaniya, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
        
      </div>
    </div>
  </div>
</div>
@endsection