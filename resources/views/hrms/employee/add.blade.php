
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Exam Portal</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ URL::asset('assetss/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assetss/css/form.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ URL::asset('assetss/css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ URL::asset('assetss/css/styles/all-themes.css') }}" rel="stylesheet" />

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

<body class="light">
  <?php //echo '<pre>';print_r($shifts);exit;?>
    @include('hrms.layouts.header')
    <!-- #Top Bar -->
    
    @include('hrms.layouts.sidebar')
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Add Students</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="">
                                    <i class="fas fa-home"></i> </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <?php //echo '<pre>';print_r($errors->all());exit;?>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Add</strong> Students</h2>

                                    



                          
                        </div>
                        {!! Form::open(array('name'=>'myform')) !!}
                        <div class="body">
                             <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="emp_fname" class="form-control  emp_fname " name="emp_fname" placeholder="First Name" value="{{ old('emp_fname') }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="emp_lname" class="form-control  emp_lname "  name="emp_lname" placeholder="Last Name" value= "{{ old('emp_lname') }}"/>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="status" id="status" class="col-12 m-t-20 p-l-0 status">
                                                <option disabled selected>Status</option>
                                              <option value="Active">Active</option>
                                                <option value="Deactive">Deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <select name="Role" id="Role" class="col-12 m-t-20 p-l-0 status">
                                                <option disabled selected>Roles</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Employee">Student</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                           
                            
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-primary waves-effect m-r-15" onclick ="return validationForm()" id="submit_records">Submit</button>
                              
                                <!-- <button type="button" class="btn btn-danger waves-effect">Cancel</button> -->
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ URL::asset('assetss/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/form.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assetss/js/admin.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/pages/forms/form-data.js') }}"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<!-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
     -->
    <script type="text/javascript">
                function validationForm()
                {


                    var emp_code=document.getElementById("emp_code").value;
                    if(typeof emp_code == 'undefined' || emp_code == '')
                    {
                        toastr.error("Employee ID must be filled out");
                        //alert("Name must be filled out");
                         return false;
                    }

                     var status=document.getElementById("status").value;
                      
                     if(status == 'Status')
                    {
                        toastr.error("Status must be Select");
                         return false;
                    }   

                    var emp_fname=document.getElementById("emp_fname").value;
                  // alert(emp_fname);
                     if(typeof emp_fname == 'undefined' || emp_fname == '')
                    {
                        toastr.error("Employee Fname must be filled out");
                         return false;
                    }

                   

                    var emp_lname=document.getElementById("emp_lname").value;
                    //alert(emp_lname);
                     if(typeof emp_lname == 'undefined' || emp_lname == '')
                    {
                         toastr.error("Employee Lname must be filled out");
                         return false;
                    }

                 

                    var emp_designation=document.getElementById("emp_designation").value;
                   
                     if(emp_designation == 'Designation')
                    {
                         toastr.error("Designation must be filled out");
                         return false;
                    }

                    var gender=document.getElementById("gender").value;
                 
                     if(gender == 'Gender')
                    {
                         toastr.error("Gender must be filled out");
                         return false;
                    }

                    var emp_number1=document.getElementById("emp_number1").value;
                   
                     if(typeof emp_number1 == 'undefined' || emp_number1 == '')
                    {
                         toastr.error("Mobile Number 1 must be filled out");
                         return false;
                    }


                    var emp_number2=document.getElementById("emp_number2").value;
                
                     if(typeof emp_number2 == 'undefined' || emp_number2 == '')
                    {
                         toastr.error("Mobile Number 2 must be filled out");
                         return false;
                    }


                    var shift=document.getElementById("shift").value;
                
                     if( shift == 'Shift')
                    {
                        toastr.error("Shift must be  filled out");
                         return false;
                    }


                    var emp_qualification=document.getElementById("emp_qualification").value;
                
                     if( emp_qualification == 'Qualification')
                    {
                        toastr.error("Qualification must be filled out");
                         return false;
                    }

                    var date_of_joining=document.getElementById("date2").value;
                
                     if(typeof date_of_joining == 'undefined' || date_of_joining == '')
                    {
                        toastr.error("Joining Date must be filled out");
                         return false;
                    }


                   

                    var Annual_leave=document.getElementById("Annual_leave").value;
                
                     if(typeof Annual_leave == 'undefined' || Annual_leave == '')
                    {
                         toastr.error("Annual Leave must be filled out");
                         return false;
                    }

                    var Department=document.getElementById("Department").value;
              
                     if( Department == 'Departments')
                    {
                         toastr.error("Department must be filled out");
                         return false;
                    }
                    

                    var current_address=document.getElementById("current_address").value;
              
                     if(typeof current_address == 'undefined' || current_address == '')
                    {
                         toastr.error("Address must be filled out");
                         return false;
                    }


                       var birth_Day=document.getElementsByClassName("birth_date")[0].value;
                   //alert(date3);
                     if(typeof birth_Day == 'undefined' || birth_Day == '')
                    {
                         toastr.error("Birth date must be filled out");
                         return false;
                    }

                    var emp_type_status = document.getElementsByClassName("Emp_type_id")[0].value;
                   //alert(date3);
                     if(emp_type_status == 'Employee_Type')
                    {
                         toastr.error("Employee Type must be filled out");
                         return false;
                    }


                    //  var last_working_day=document.getElementsByClassName("last_working_day")[0].value;
               
                    //  if(typeof last_working_day == 'undefined' || last_working_day == '')
                    // {
                    //     toastr.error("last Working Day be filled out");
                    //      return false;
                    // }




                }

                                
     </script>
     <script>
           @if (Session::has('message'))
                                      toastr.success("{{Session::get('message')}}")
                                      @endif
     </script>
</body>

</html>