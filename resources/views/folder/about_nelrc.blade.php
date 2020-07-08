<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
.blue{
    font-size:30px;
    color:black;
}
.important{
    width:30px;
    background:red;
    left:10px;

}
.nel1{
    width:40%;
    float:left;
    
}
.nel2{
    width:55%;
    float:left;
}
div h4{
    color:green;
}
div h4:hover{
    color:purple;
}
#cl{
height:20px;
width:100%;
}
</style>

</head>
</html>
@extends('layouts.ap')
@section('conten')
<div class="content" style="background-color:grey;width:122%;margin-left:-118px;height:1000px;">
<h2 style="margin-left:350px;padding:30px;margin-top:50px;">ABOUT US</h2>
<div class="nel" style="width:100%;height:725px;">
    <div class="nel1">
        <h4 style="float:left;margin-top:30px;margin-left:50px;" id="id12" >MISSION</h4>
        <h4 style="margin:30px;padding-left:125px;" id="id15" >VISION</h4>
        <hr id="id13"/>
        <p id="id14"></p>
        
        <script>
        var a=document.getElementById('id12');
        var b=a.addEventListener('click',fun);
function fun(){

    document.getElementById('id12').style.fontSize='30px';
    document.getElementById('id15').style.fontSize='20px';
    document.getElementById('id15').style.color='green';
   
    document.getElementById('id12').style.color='black';
    document.getElementById('id13').style.border="3px solid red";
    document.getElementById('id13').style.width="80px";
    document.getElementById('id13').style.margin="80px;";
    document.getElementById('id14').innerHTML="Providing an effective e-learning environment through advanced information and communication technologies to allow the learner be the center of the education process and to foster necessary employable skilled human resources to the nation";


}

var a=document.getElementById('id15');
        var b=a.addEventListener('click',fun1);
function fun1(){
    document.getElementById('id15').style.fontSize='30px';
    document.getElementById('id12').style.fontSize='20px';
    document.getElementById('id12').style.color='green';
    document.getElementById('id15').style.color='black';
    document.getElementById('id13').style.border="3px solid green";
    document.getElementById('id13').style.left="180px";
    document.getElementById('id13').style.width="100px";
    document.getElementById('id14').innerHTML="To become a center of excellence in innovative teaching and learning to make everyone employable.";


}

</script>
    </div>
<div class="nel2" style="margin-top:30px;margin-left:20px;height:10px;">
    <div class="btn-group">
  <p style="width:600px;height:90px;background-color:grey;color:black;text-align:center;padding:20px;font-size:25px;" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
  OBJECTIVES
  </p>
</div>
   <div class="btn-group">
  <p type="button" class="btn btn-secondary dropdown-toggle" style="width:600px;height:40px;background-color:white;color:black;margin-top:-16px;" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    <b>Media Campaign</b>
  </p>
  <div class="dropdown-menu dropdown-menu-lg-right" style="width:100%;height:80px;margin-top:-30px;">
    <p class="dropdown-item" style="width:100px;margin-left:-20px;" >To disseminate e-culture through awareness and media campaigns to prepare the<br> community to accept and interact with e-learning.</p>
  </div>
</div>
<div class="btn-group">
  <p type="button" class="btn btn-secondary dropdown-toggle" style="width:600px;height:40px;margin-top:50px;background-color:white;color:black" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
  <b>Career Development</b>
  </p>
  <div class="dropdown-menu dropdown-menu-lg-right" style="width:100%;height:80px;margin-top:-30px;">
    <p class="dropdown-item" style="width:100px;margin-left:-20px;" >To create public and private sector partnership for professional <br>and career development</p>
  </div>
</div>
<div class="btn-group">
  <p type="button" class="btn btn-secondary dropdown-toggle" style="width:600px;height:40px;margin-top:50px;background-color:white;color:black" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
  <b>Anywhere Anytime E-Learning</b>
  </p>
  <div class="dropdown-menu dropdown-menu-lg-right" style="width:100%;height:80px;margin-top:-30px;">
    <p class="dropdown-item" style="width:100px;margin-left:-20px;" >To promote anywhere, anytime learning in Sri Lanka.</p>
  </div>
</div>
<div class="btn-group">
  <p type="button" class="btn btn-secondary dropdown-toggle" style="width:600px;height:40px;margin-top:50px;background-color:white;color:black" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
  <b>Teaching & Learning</b>
  </p>
  <div class="dropdown-menu dropdown-menu-lg-right" style="width:100%;height:80px;margin-top:-30px;">
    <p class="dropdown-item" style="width:100px;margin-left:-20px;" >To promote blended teaching and learning in Sri Lanka</p>
  </div>
</div>
<div class="btn-group">
  <p type="button" class="btn btn-secondary dropdown-toggle" style="width:600px;height:40px;margin-top:50px;background-color:white;color:black" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    <b>Professional certification and accreditation authority </b>
  </p>
  <div class="dropdown-menu dropdown-menu-lg-right" style="width:100%;height:80px;margin-top:-30px;">
    <p class="dropdown-item" style="width:100px;margin-left:-20px;" >To act as a professional certification and accreditation authority</p>
  </div>
</div>
<div class="btn-group">
  <p type="button" class="btn btn-secondary dropdown-toggle" style="width:600px;height:40px;margin-top:50px;background-color:white;color:black" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
  <b>Employability of young people</b>
  </p>
  <div class="dropdown-menu dropdown-menu-lg-right" style="width:100%;height:80px;margin-top:-30px;">
    <p class="dropdown-item" style="width:100px;margin-left:-20px;" >To increase employability of young people.</p>
  </div>
</div>
<div class="btn-group">
  <p type="button" class="btn btn-secondary dropdown-toggle" style="width:600px;height:40px;margin-top:50px;background-color:white;color:black" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
  <b>Creating a national knowledge work force</b>
  </p>
  <div class="dropdown-menu dropdown-menu-lg-right" style="width:100%;height:80px;margin-top:-30px;">
    <p class="dropdown-item" style="width:100px;margin-left:-20px;margin-bottom:-50px;float:left;" >To attract overseas investors and outsourcing jobs <br> by creating a national knowledge work force.</p>
  </div>
</div>
</div>
</div>
</div>
<h2 style="text-align:center;padding:30px;font-size:45px;"><b>OUR TEAM</b></h2>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;border:none;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">DR. GAMINI WIJAYARATHNA</h5>
    <p class="card-text"style="text-align:center;">Dean/Faculty Of Computing And Technology Senior Lecturer (Grade I)</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;margin-left:50px;border:none;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">PROFESSOR ROHANA LUXMAN PIYADASA</h5>
    <p class="card-text"style="text-align:center;">Consultant- Multimedia
Professor of Mass Communication</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;margin-left:50px;border:none;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">DR. S.A.D.H.N. SURAWEERA</h5>
    <p class="card-text"style="text-align:center;">Consultant-Instructional Designing
Senior Lecturer (Grade II)
Department of Library and Information Science
Faculty of Social Sciences</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;border:none;margin-top:35px;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">DR. M.R.K.N. YATIGAMMANA</h5>
    <p class="card-text"style="text-align:center;">Director Of NELRC
Senior Lecturer (Grade II)
Department of Commerce and Financial Management
Faculty of Commerce and Management</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;border:none;margin-left:50px;margin-top:35px;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">MR. UPUL JAYANTHA RANEPURA</h5>
    <p class="card-text"style="text-align:center;">Deputy Director Of NELRC
Senior Lecturer (Grade II)
Department of Fine Arts
Faculty of Humanities</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;border:none;margin-left:50px;margin-top:35px;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">MR. DARSHANA MAPA PATHIRANAGE</h5>
    <p class="card-text"style="text-align:center;">Deputy Director Of NELRC
Senior Lecturer (Grade II)
Department of Mass Communication
Faculty of Social Sciences</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;border:none;margin-top:35px;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">MR. MANGALA KEERTHI DE PASQUAL</h5>
    <p class="card-text"style="text-align:center;">Manager Of NELRC Lecturer Department of Mass Communication Faculty of Social Sciences</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;border:none;margin-left:50px;margin-top:35px;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">MR. CHATHURA PRIYANKARA</h5>
    <p class="card-text"style="text-align:center;">Manager Of NELRC
Lecturer (Probationary)
Department of Software Engineering
Faculty of Computing and Technology</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 21rem;float:left;border:none;margin-left:50px;margin-top:35px;">
  <div class="card-body"style="background-color:white;">
    <h5 class="card-title"style="text-align:center;">MRS. DILINI LAKSHIKA GAMAGE</h5>
    <p class="card-text"style="text-align:center;">Project Assistant Of NELRC</p>
  </div>
</div>
@endsection