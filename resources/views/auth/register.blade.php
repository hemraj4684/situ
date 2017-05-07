<html>
<head>


<script language="JavaScript">

function UpperCase(ctrlID) {
            var PANNo = document.getElementById(ctrlID).value;
            if (PANNo != "") {
                document.getElementById(ctrlID).value = PANNo.toUpperCase();
            }
        }

function pan_validate(name)
{

var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

if(regpan.test(name) == false)
{

document.getElementById("status").innerHTML = "PAN Number is not yet valid.";

}
else
{

document.getElementById("status").innerHTML = "You have entered a valid PAN Number !";

}
}

function adhar_validate(co_adhar_no)
{

var regadhar = /^([0-9]){12}?$/;

if(regadhar.test(co_adhar_no) == false)
{

document.getElementById("status1").innerHTML = "Adhar Number is not yet valid.";

}
else
{

document.getElementById("status1").innerHTML = "You have entered a valid Adhar Number !";

}
}

</script>

</head>
<body>



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          
                         <div class="form-group{{ $errors->has('co_name') ? ' has-error' : '' }}">
                            <label for="co_name" class="col-md-4 control-label">Company Name&nbsp;<span style="color: red">*</span></label>
                           
                            <div class="col-md-6">
                                <input id="co_name" type="text" class="form-control" name="co_name" value="{{ old('co_name') }}">

                                @if ($errors->has('co_name'))
                                    <span class="help-block">
                                      <!--  <strong>{{ $errors->first('co_name') }}</strong>-->
                                        <strong>Company Name is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                          
                          
                          <div class="form-group{{ $errors->has('co_add') ? ' has-error' : '' }}">
                            <label for="co_add" class="col-md-4 control-label">Company Address&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="co_add" type="text" class="form-control" name="co_add" value="{{ old('co_add') }}">

                                @if ($errors->has('co_add'))
                                    <span class="help-block">
                                     <!--    <strong>{{ $errors->first('co_add') }}</strong>-->
                                        <strong>Company Address is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                          
                          
                          
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">PAN Number&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" onkeyup="pan_validate(this.value);" onkeypress="UpperCase('name');" onkeyup="UpperCase('name');">
                                <span id="status"></span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                      <!--     <strong>{{ $errors->first('name') }}</strong>-->
                                        <strong>PAN Number is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          
                        <div class="form-group{{ $errors->has('co_cont_name') ? ' has-error' : '' }}">
                            <label for="co_cont_name" class="col-md-4 control-label"> Contact Person Name&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="co_cont_name" type="text" class="form-control" name="co_cont_name" value="{{ old('co_cont_name') }}">

                                @if ($errors->has('co_cont_name'))
                                    <span class="help-block">
                                   <!--  <strong>{{ $errors->first('co_cont_name') }}</strong>-->
                                         <strong>Contact Person Name is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                          
                          
                         <div class="form-group{{ $errors->has('co_cont_no') ? ' has-error' : '' }}">
                            <label for="co_cont_no" class="col-md-4 control-label">Contact Person Number&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="co_cont_no" type="text" class="form-control" name="co_cont_no" value="{{ old('co_cont_no') }}">

                                @if ($errors->has('co_cont_no'))
                                    <span class="help-block">
                                         <!--  <strong>{{ $errors->first('co_cont_no') }}</strong>-->
                                         <strong> Contact Person Number is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                          
                        
                          
                        <div class="form-group{{ $errors->has('co_adhar_no') ? ' has-error' : '' }}">
                            <label for="co_adhar_no" class="col-md-4 control-label">Contact Person Adhar Number&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="co_adhar_no" type="text" class="form-control" name="co_adhar_no" value="{{ old('co_adhar_no') }}" onkeyup="adhar_validate(this.value);">
                                   <span id="status1"></span>
                                @if ($errors->has('co_adhar_no'))
                                    <span class="help-block">
                                      <!--     <strong>{{ $errors->first('co_adhar_no') }}</strong>-->
                                        <strong> Adhar Number is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                          

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                       <!--   <strong>{{ $errors->first('email') }}</strong>-->
                                          <strong> Email Address is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                      <!--      <strong>{{ $errors->first('password') }}</strong>-->
                                         <strong> Password is Required</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password&nbsp;<span style="color: red">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
</html>