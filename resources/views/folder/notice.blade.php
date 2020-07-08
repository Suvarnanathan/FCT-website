<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
.div{
    margin-left:400px;
}
.div a{
    color:black;
    display:block;

}
.div a:hover{
    color:orange;
}
</style>
</head>
</html>
@extends('layouts.app')
@section('notice')
<p style="margin-left:-100px;">Notices</p>
<p style="margin-left:400px;font-size:30px;margin-top:50px;margin-right:-100px;"><b>NOTICES</b></p>
<hr style="margin-left:450px;margin-right:600px; background-color:red"/>
<div class="div">
    <a href="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/Rescheduling-Examinations-1.pdf">Re-scheduling Examinations</a>
    <a href="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/01/Repeat-Examination-Notice.pdf">Repeat Examination Notice</a>
</div>
@endsection