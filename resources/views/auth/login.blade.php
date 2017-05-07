<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Situ</title>

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{URL::asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
         <script type="text/javascript" src="{{URL::asset('assets/js/custom_script.js')}}"></script>
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/custom2.css')}}"> 
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>


<script language="JavaScript">
function UpperCase(ctrlID) {
            var PANNo = document.getElementById(ctrlID).value;
            if (PANNo !== "") {
                document.getElementById(ctrlID).value = PANNo.toUpperCase();
            }
        }

      
    function showdiv() {
  document.getElementById("admin").style.display = "none";
  }

</script>
</head>

 <body id="app-layout">
    
    
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
    
    
    </div>
    
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                  
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" onclick="getElementById('uname').innerHTML='User Name';return false;">Staff Login</a></li>
                        <li><a href="{{ url('/login') }}"> User Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>   
    
 
<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
                    {{Session::get('status')}}
            </div>
        @endif
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('auth.login') }}">
                        {{ csrf_field() }}

                          
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" id="uname" class="col-md-4 control-label">PAN NUMBER&nbsp; <span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required><!--onkeypress="UpperCase('name');" onkeyup="UpperCase('name');">-->

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" onclick="showdiv()">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
         
    </div>
</div>
    
     
<script>
            	
  
</script>
    
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}




    
    
</body>
</html>
