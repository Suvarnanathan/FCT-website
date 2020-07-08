<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>

.div{
    margin-top:100px;
}
 .div a{
    color:black;
}
.div a:hover{
    color:orange;
}

</style>
</head>
</html>
@extends('layouts.app')
@section('under')
<p style="margin-left:-100px;">Undergraduate Programs</p>
<p style="margin-left:200px;font-size:25px;"><b>UNDERGRADUATE PROGRAMS</b></p>
<hr style="margin-left:350px;margin-right:700px; background-color:red"/>
<div class="div">
<a style="margin-left:200px;margin-top:80px;" href="bse">Bachelor of science Honours in Comouter science degree</a><br>
<a style="margin-left:250px;" href="bet">Bachelor of Engineering Technology[BET] degree</a><br>
<a style="margin-left:150px;" href="bict">Bachelor of Information Communication Technology[BICT] degree</a>
</div>
@endsection