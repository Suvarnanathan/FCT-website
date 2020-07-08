
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
@section('conten')
<p style="margin-left:-100px;">Academic Staff</p>
<div class="card mb-3" style="max-width: 540px;border:none;margin-left:-100px;margin-top:80px;">
  <div class="row gutters">
    <div class="col-md-4" id="id3">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2016/09/Prof.Dias_.jpg" class="card-img" alt="prof.Dias">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2016/09/Dr.Carmel.jpg" class="card-img" alt="Dr.Carmel">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2016/09/Dr.Chamli.jpg" class="card-img" alt="Dr.chamli">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/03/Dr.Gamini-2.jpg" class="card-img" alt="Dr.gamini">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Dhammika.jpg" class="card-img" alt="Dr.dhammika">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Sidath.jpg" class="card-img" alt="Dr.sidharth">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Asanka.jpg" class="card-img" alt="Dr.asanka">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Thilini.jpg" class="card-img" alt="Dr.thilini">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Laalitha.jpg" class="card-img" alt="Dr.laalitha">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/Dr.Pradeep.jpg" class="card-img" alt="Dr.pradeep">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/DSC05272.jpg" class="card-img" alt="Mr.chathura">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/01/DSC05269.jpg" class="card-img" alt="Ms.hiroshika">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/11/Thilini-Yatanwala_1.jpg" class="card-img" alt="Mrs.thilini">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2017/06/New-Shakya.jpg" class="card-img" alt="Mr.shakya">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2018/10/Dilini.jpg" class="card-img" alt="Mrs.dilini">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2018/10/Nisal.jpg" class="card-img" alt="Mr.nisal">
      <img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2018/10/Hansi.jpg" class="card-img" alt="Mrs.hansi">
    
    </div>
    <div class="col-md-8">
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Prof.N.G.J.Dias</a></h5>
        <p class="card-text" >PhD (Wales, UK), MSc (Belfast, UK), B.Sc. (Special) (Colombo, SriLanka), MBCS, MIEEE.</p>
        <p class="card-text" id="id2">Senior Professor in Computer Science</p>
        <p class="card-text" id="id2" style="color:green;">ngjdias@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title" style="margin-top:40px;"><a href="">Dr.(Mrs) M.C. wijegunasekara</a></h5>
        <p class="card-text" >PhD (Wales, UK), MSc (Wales, UK), BSc (Special) (Kelaniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I) in Computer Science</p>
        <p class="card-text" id="id2" style="color:green;">carmel@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Chamli Pushpakumara</a></h5>
        <p class="card-text" >PhD (Sheffield Hallam University, UK), BSc (Kelaniya)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I)</p>
        <p class="card-text" id="id2" style="color:green;">chamli@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Gamini Wijayarathna</a></h5>
        <p class="card-text" >DrEng (Electro-Communications, Japan), MEng (Electro-Communications, Japan), BSc (Kelaniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I)</p>
        <p class="card-text" id="id2">Dean / Faculty of Computing and Technology</p>
        <p class="card-text" id="id2" style="color:green;">gamini@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Hesiri Dhammika Weerasinghe</a></h5>
        <p class="card-text" >PhD (Oakland, USA), MSc (Oakland, USA), BSc (Special) (Kelaniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I) in Computer Science</p>
        <p class="card-text" id="id2">Head/ Department of Computer Systems Engineering</p>
        <p class="card-text" id="id2" style="color:green;">hesiri@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.S.R.Liyanage</a></h5>
        <p class="card-text" >PhD (NUS, Singapore), MPhil (Peradeniya, SriLanka), BSc (Special) (Kelaniya, SriLanka), MIEEE</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade I) in Computer Science</p>
        <p class="card-text" id="id2">Head / Department of Software Engineering</p>
        <p class="card-text" id="id2" style="color:green;">sidath@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Asanka.Pallewatta</a></h5>
        <p class="card-text" >PhD (Risø DTU, Denmark), MEng (Gifu, Japan), BEng (Gifu, Japan), Dip.in Fashion Design (SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade II) in Nanotechnology</p>
        <p class="card-text" id="id2" style="color:green;">asanka@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.(Mrs) Thilini Rupasinghe</a></h5>
        <p class="card-text" >PhD (Iowa, USA), MSc (Iowa, USA), BSc (Special) Hons (Colombo, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade II) in Nanomaterials</p>
        <p class="card-text" id="id2" style="color:green;">thilinir@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Laalitha S.I.Liyanage</a></h5>
        <p class="card-text" >PhD (Mississippi, USA), MSc (Mississippi, USA), BSc (Special) Hons (Peradeniya, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade II) in Computational Nanotechnology</p>
        <p class="card-text" id="id2" style="color:green;">laalitha@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Dr.Pradeep Samarasekere</a></h5>
        <p class="card-text" >PhD (Houston, USA), BSc (Special) Hons (Colombo, SriLanka)</p>
        <p class="card-text" id="id2">Senior Lecturer (Grade II) in Materials and Process Chemistry</p>
        <p class="card-text" id="id2" style="color:green;">pradeep@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"><a href="">Mr.Chathura Priyankara</a></h5>
        <p class="card-text" >BSc (IT) Hons (Moratuwa, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
        <p class="card-text" id="id2" style="color:green;">cpriyankara@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"style="margin-top:50px;"><a href="">Ms. Hiroshika Nadeeshani Premarathne</a></h5>
        <p class="card-text" >MSc (SLIIT, Sri Lanka), BSc in IT(Special) Hons (SLIIT, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary) in Computer Science</p>
        <p class="card-text" id="id2" style="color:green;">hiroshika@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title"style="margin-top:50px;"><a href="">Mrs.Thilini Yatanwala</a></h5>
        <p class="card-text" >BSc (IT) Hons (Moratuwa, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary) in Computer Science</p>
        <p class="card-text" id="id2" style="color:green;">tmyatanwala@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title" style="margin-top:90px;"><a href="">Mr.Shakya Bandara</a></h5>
        <p class="card-text" >BTech (Eng) (Hons) (OUSL, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
        <p class="card-text" id="id2" style="color:green;">shakya@kln.ac.lk</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title" style="margin-top:70px;"><a href="">Mrs.W.A.Dilini Nishadika Gunadilake</a></h5>
        <p class="card-text" >Bachelor of Science of Engineering (Honors)(Mechanical)(Moratuwa, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title" style="margin-top:70px;"><a href="">Mr.U.K.D Nishal Manisha</a></h5>
        <p class="card-text" >B.Sc. (special) in Computer Science (Kelaniya, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
        
      </div>
      <div class="card-body" id="id1"style="width:270%;border:none;">
        <h5 class="card-title" style="margin-top:70px;"><a href="">Mrs.Hansi Udapola</a></h5>
        <p class="card-text" >B.Sc. (special) in Computer Science (Kelaniya, Sri Lanka)</p>
        <p class="card-text" id="id2">Lecturer (Probationary)</p>
        
      </div>
    </div>
  </div>
</div>

@endsection
