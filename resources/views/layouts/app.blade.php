<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FCT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
        
     <script src="https://use.fontawesome.com/24c7bed1a7.js"></script>
     <script>
      $(window).scroll(function(){
          if($(this).scrollTop()>100){
              $('#id').addClass("sticky");
          }
          else{
            $('#id').removeClass("sticky"); 
          }
      })
      $(window).scroll(function(){
          if($(this).scrollTop()>100){
              $('#id11').addClass("stick");
          }
          else{
            $('#id11').removeClass("stick"); 
          }
      })
     </script>
     
      <style>
      .sticky{
         position:sticky;
         top: 0;
         left:0;
         width:100%;
         z-index: 10;
        
     }
     .stick{
         position:sticky;
         top:110px;
         width:100%;
         z-index: 100;
     }
     .section{
         height:40px;
     }
      div.sec a{
        color:orange;
        text-decoration:none;
        margin-bottom:5px;
      }
      div.sec a:hover{
        color:green;
        border:none;
      }
      p.ph:hover{
        color:red;
      }
  div#navbarSupportedContent ul li a#navbarDropdown{
      color:white;
  }div#navbarSupportedContent ul li a.nav-link{
      color:white;
  }

  
  div ul li a:hover{
    background-color:red;
      
      
  }
  #id7 a:hover{
      background-color:white;
  }
  #id5 a:hover{
      background-color:white;
  }
  #id8 a:hover{
      background-color:white;
  }
  
  .dropdown:hover>.dropdown-menu {
  display: block;
}

#demo-2 input[type=search] {
    background: #ededed 
    url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	width: 15px;
	padding-left: 10px;
	color: transparent;
	cursor: pointer;
}
#demo-2 input[type=search]:hover {
	background-color: #fff;
}
#demo-2 input[type=search]:focus {
	width: 130px;
	padding-left: 32px;
	color: #000;
	background-color: #fff;
	cursor: auto;
}
#demo-2 input:-moz-placeholder {
	color: transparent;
}
#demo-2 input::-webkit-input-placeholder {
	color: transparent;
}

      </style>
    </head>
    <body>
    <!-- Image and text -->
<nav class="navbar navbar-light" id="id"style="background-color:rgb(102,0,0)">
  <a class="navbar-brand" href="#">
    <img src=https://upload.wikimedia.org/wikipedia/en/e/e0/Kelaniya.png width="100" height="100" class="d-inline-block align-top" style="float:left;">
    <p style="color:white">Faculty Of Computing and Technology<br>
    University Of Kelaniya<br>  
    SriLanka
    </p>
  </a>
</nav>
        
    <nav class="navbar navbar-expand-lg" id="id11"style="background-color:rgb(102,0,0);text-decoration:none;color:white">
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="/" style="color:black;background-color:white;right:0;">Home</a>
      </li>
      <li class="nav-item dropdown" id="id6"style="margin-left:30px;">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="id5" style="width:1200px;margin-left:-87px;">
            <div style="width:20%;float:left;">
            <p style="margin-left:40px;"><b>FCT STAFF</b></p>
          <a class="dropdown-item" href="academic">AcademicStaff</a>
          <a class="dropdown-item" href="non">Non-AcademicStaff</a>
          <a class="dropdown-item" href="admin">AdministrativeStaff</a>
          </div>
          <div style="width:10%;float:left;">
          <p style="margin-left:40px;"><b>CENTERS</b></p>
          <a class="dropdown-item" href="iic">IICFCT</a>
          <a class="dropdown-item" href="nel">NELRC</a>
          <a class="dropdown-item" href="nano">NanoTechnology Center</a>
          </div>
        </div>
        
        
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
         Departments
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="id8"style="background-color:white;width:1200px;margin-left:-183px;">
          <a class="dropdown-item" href="dac">DEPARTMENT OF APPLIED COMPUTING</a>
          <a class="dropdown-item" href="dce">DEPARTMENT OF COMPUTER SYSTEMS ENGINEERING</a>
          <a class="dropdown-item" href="dse">DEPARTMENT OF SOFTWARE ENGINNERING</a>
        </div>
        
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academic
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="id7">
          <a class="dropdown-item" href="ugp">undergraduate program</a>
          <a class="dropdown-item" href="postgra">postgraduate program</a>
          <a class="dropdown-item" href="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/02/Academic-Calendar-2019-Jan.pdf">AcademicCalendar</a>
        </div>
        
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Research
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="con">Conferences</a>
          <a class="dropdown-item" href="phd">Php/MPhil Students</a>
          <a class="dropdown-item" href="research">Research And Groups</a>
        </div>
        
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         For Students
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="prospectus">Prospectus</a>
          <a class="dropdown-item" href="http://fct.kln.ac.lk/FCT/wp-content/uploads/2019/03/Master-Time-table-2019-semester-1.pdf">Student Timetable</a>
          <a class="dropdown-item" href="notice">Notices</a>
        </div>
        
      
      </li>
     
      <li class="nav-item active"  style="margin-left:30px;">
        <a class="nav-link" href="contact">ContactUS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active"  style="margin-left:30px;">
        <a class="nav-link" href="vacancy">Vaccancies <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active"  style="margin-left:30px;">
        <a class="nav-link" href="develope">FacultyDevelopment <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active"  style="margin-left:30px;">
        <a class="nav-link" href="notices">Notices <span class="sr-only">(current)</span></a>
      </li>
    </ul>
   
    <form id="demo-2">
	<input type="search" placeholder="Search">
</form>
  </div>
</nav>

<section></section>
<div class="container">
            @yield('content')
        </div>
        <div class="container">
            @yield('conten')
        </div>
        <div class="container">
            @yield('cont')
        </div>
        <div class="container">
            @yield('con')
        </div>
        <div class="container">
            @yield('co')
        </div>
        <div class="container">
            @yield('c')
        </div>
        <div class="container">
            @yield('contentss')
        </div>
        <div class="container">
            @yield('dce')
        </div>
        <div class="container">
            @yield('dse')
        </div>
        <div class="container">
            @yield('under')
        </div>
        <div class="container">
            @yield('bse')
        </div>
        <div class="container">
            @yield('bet')
        </div>
        <div class="container">
            @yield('eval')
        </div>
        <div class="container">
            @yield('epro')
        </div>
        <div class="container">
            @yield('postgra')
        </div>
        <div class="container">
            @yield('master')
        </div>
        <div class="container">
            @yield('bict')
        </div>
        <div class="container">
            @yield('conf')
        </div>
        <div class="container">
            @yield('icact')
        </div>
        <div class="container">
            @yield('kicact')
        </div>
        <div class="container">
            @yield('kicact2')
        </div>
        <div class="container">
            @yield('phd')
        </div>
        <div class="container">
            @yield('research')
        </div>
        <div class="container">
            @yield('prospectus')
        </div>
        <div class="container">
            @yield('notice')
        </div>
        <div class="container">
            @yield('contact')
        </div>
        <div class="container">
            @yield('vacancy')
        </div>
        <div class="container">
            @yield('develope')
        </div>
        <div class="container">
            @yield('develope')
        </div>
<div style="background-color:black;height:100px;"><p style="text-align:center;color:green;padding:20px;">Copyright 2019  &nbsp | &nbsp   Faculty Of Computing and Technology</p></div>



    </body>
</html>
