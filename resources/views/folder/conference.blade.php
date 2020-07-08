<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
.div{
    margin-left:500px;
    
}
.div a{
    color:black;
}
.div a:hover{
    color:brown;
}
</style>
</head>
</html>
@extends('layouts.app')
@section('conf')
<p style="margin-left:-100px;">Conferences</p>
<p style="margin-left:-100px;font-size:30px;margin-top:40px;"><b>INTERNATIONAL CONFERENCE ON ADVANCES IN COMPUTING AND TECHNOLOGY </b><p style="text-align:center;font-size:35px;"><b>(ICACT)</b></p></p>
<hr style="margin-left:300px;margin-right:400px; background-color:red"/>
<div class="div">
<a style="text-align:center;font-size:20px;" href="icact"><b>ICACT 2018</b></a><br>
<a style="text-align:center;font-size:20px;" href="kicact"><b>KICACT 2017</b></a><br>
<a style="text-align:center;font-size:20px;" href="kicact2"><b>KICACT 2016</b></a><br>
</div>
@endsection