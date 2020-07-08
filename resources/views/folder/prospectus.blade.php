<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
.div {
    margin-left:-100px;
}
.div a{
    color:black;
    margin-top:100px;
}
.div a:hover{
    color:orange;
}
.div2{
    margin-top:50px;
    margin-left:-100px;
}
.div2 img{
    margin-left:100px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
.modal-content {
  margin: auto;
  display: block;
  width: 40%;
  max-width: 700px;
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
</html>
@extends('layouts.app')
@section('phd')
<div class="div">
<p>Prospectus</p>
<a href="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/Pathways.pdf">Specialisation Pathways and New Degree structure for first years</a>
</div>
<div class="div2">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/Cover-page-new-300x211.jpg" id="id10">
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>
<script>
var a=document.getElementById("id10");
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    a.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}
        
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}      
    
</script>
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/cover-inside-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/01-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/02-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/03-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/04-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/05-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/06-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/07-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/08-300x211.jpg ">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/10-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/09-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/11-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/12-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/13-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/14-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/15-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/16-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/17-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/18-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/19-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/29-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/30-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/31-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/32-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/33-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/34-300x211.jpg">
<img src="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/Back-Page-300x211.jpg">
</div>
@endsection