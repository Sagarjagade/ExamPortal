<!DOCTYPE html>
<html>
<head>
	<title>Exam Portal</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assetss/css/login/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
    <style>
       .toast {
    left: 50%;
    height: 60px;
    top:10%;
    font-size: 13px;
    font-weight: bold;
    position: fixed;
    transform: translate(-50%, 0px);
    z-index: 9999;
  
}
    </style>
</head>
<body>
	<img class="wave" src="{{ URL::asset('assetss/images/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ URL::asset('assetss/images/bg.svg') }}">
		</div>
		<div class="login-content">
			  {!! Form::open(array('id'=>'login')) !!}
				<img src="{{ URL::asset('assetss/images/avatar.svg') }}">
				<h2 class="title">Welcome</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="name" id="emp_email" value="{{ old('name') }}">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" id="emp_password">
            	   </div>
            	</div>
            	<!-- <a href="#">Forgot Password?</a> --><br>
            	<input type="submit" class="btn" onclick ="return validationForm()" value="Login">
             {!! Form::close() !!}
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assetss/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
   
   <script type="text/javascript">
                function validationForm()
                {


                    var emp_email=document.getElementById("emp_email").value;
                    if(typeof emp_email == 'undefined' || emp_email == '')
                    {
                        toastr.error("Username must be filled out");
                        //alert("Name must be filled out");
                         return false;
                    }

                     var emp_password=document.getElementById("emp_password").value;
                      
                     if(typeof emp_password == 'undefined' || emp_password == '')
                    {
                        toastr.error("Password must be filled out");
                         return false;
                    }   


                   
                }

                                
     </script>

    <script>
 @if (Session::has('message'))
                                      toastr.error("{{Session::get('message')}}")
                                @endif
                            </script>
</body>
</html>
