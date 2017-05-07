<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{URL::asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
         <script type="text/javascript" src="{{URL::asset('assets/js/custom_script.js')}}"></script>
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/custom2.css')}}"> 
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}">
    
    
    <!--
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">
    <link href="public/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	 <link href="public/assets/css/custom.css" rel="stylesheet" type="text/css">-->
  </head><body>
  
  
  <div class="container-fluid">
   
   <div class="row">
   <div class="col-md-4">
	<img src="logo.jpg" width="60" height="20" class="img-responsive" class="pull-left" class="img-thumbnail">
	</div>
	<div class="col-md-8">
	<label><center>
	<br>
	Government of India Ministry of Textiles<br>

Regional Office of the Textile Commissioner,
Navi Mumbai </center></label>
	</div>
	
	</div>
	
	<div class="row">
 
	  <div class="navbar navbar-default navbar-static-top">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="home.html">Home</a>
            </li>
            <li>
              <a href="#">Contact Us</a>
            </li>
            
              <li>
              <a href="IM_PRINC_1.html">Format I</a>
            </li>
             <li>
              <a href="APP_SUB_1.html">Format II</a>
            </li>
             <li>
              <a href="RO_LIST_1.html">IN-Principal No approval</a>
            </li>
          </ul>
        </div>
      
    </div>
	
   </div>

        </div>
  </div>
 
@yield('content')
</body></html>