
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
body{
    background-color:red;
}

.on{
    width:100%;
    height:800px;
    margin-top:50px;
   
}
.on1{
    margin-left:60px;
    width:45%;
    float:left;
}
.on2{
    float:left;
}
</style>
</head>
</html>
@extends('layouts.ap')
@section('cont')
<div class="on">
    <div class="on1">
    <h3>CONTACT US</h3>
    <p><b>Address</b></p>
    <address>
    National E-Learning Resource Center,<br>
University of Kelaniya,<br>
Dalugama,<br>
Kelaniya 11600,<br>
Sri Lanka.
    </address>
    <p><b>Telephone</b></p>
    <p>+94112903193 / +94112903196</p>
    <p><b>E-Mail</b></p>
    <a style="color:blue;" href="mailto:nelrc@kln.ac.lk" >
    nelrc@kln.ac.lk
</a><br>
<a style="color:blue;" href="mailto:dnelrc@kln.ac.lk" >
    dnelrc@kln.ac.lk
</a>
    </div>
    <div class="on2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.295216734931!2d79.91387131426795!3d6.974454419692631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae258033380c747%3A0x12c707892cabde33!2sUniversity%20of%20Kelaniya%20-%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1585575017346!5m2!1sen!2slk" width="500" height="450" frameborder="0" style="border:0;margin-top:40px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
@endsection