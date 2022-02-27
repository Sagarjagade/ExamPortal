
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Exam Portal </title>
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
                                <h4 class="page-title">Assign Exam</h4>
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
                                <strong>Assign Exam</strong> </h2>

                                    



                          
                        </div>
                        {!! Form::open(array('name'=>'myform')) !!}
                        <div class="body">
                          
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                              <select name="empname" id="empname" class="shift col-12 m-t-20 p-l-0 ">
                                                <option disabled selected>Employee Name</option>
                                                 @foreach($getEmpname as $val)
                                                 <option value="{{ $val->emp_code}}">{{ $val->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                              <select name="ExamAssign" id="ExamAssign" class="shift col-12 m-t-20 p-l-0 ">
                                                <option disabled selected>Select Exam</option>
                                                 @foreach($ExamList as $val)
                                                 <option value="{{ $val->Exam_id}}">{{ $val->Exam_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            

                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-primary waves-effect m-r-15" onclick ="return validationForm()" id="submit_records">Submit</button>
                               
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


                    var empname=document.getElementById("empname").value;

                    if(typeof empname == 'Employee Name' || empname == 'Employee Name')
                    {
                        toastr.error("Employee name must be filled out");
                        //alert("Name must be filled out");
                         return false;
                    }

                   
                    var Exam_Assign=document.getElementById("ExamAssign").value;
                  // alert(emp_fname);
                     if(typeof Exam_Assign == 'undefined' || Exam_Assign == 'Select Exam')
                    {
                        toastr.error("Select Exam must be filled out");
                         return false;
                    }

                   


                }

                                
     </script>
     <script>
           @if (Session::has('message_Assign'))
                                      toastr.success("{{Session::get('message_Assign')}}")
                                      @endif
     </script>
</body>

</html>