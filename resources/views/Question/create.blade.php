
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
                                <h4 class="page-title">Add Question</h4>
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
                                <strong>Add</strong> Question</h2>

                                    



                          
                        </div>
                        {!! Form::open(array('name'=>'myform')) !!}
                        <div class="body">
                          
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="Question_name" class="form-control  Question_name " name="Question_name" placeholder="Question Enter" value="{{ old('Question_name') }}"/>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <br>
                             <h6><strong>Enter The Question Answer  </strong></h6>
                            <br><br>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="Question_answer_1" type="text" name="Question_answer_1" class="Question_answer_1 form-control"
                                                placeholder="Enter Question Answer (1)" value="{{ old('Question_answer_1') }}" >
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="Question_answer_2" type="text" name="Question_answer_2" class="Question_answer_2 form-control"
                                                placeholder="Enter Question Answer (2)" value="{{ old('Question_answer_2') }}" >
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="Question_answer_3" type="text" name="Question_answer_3" class="Question_answer_3 form-control"
                                                placeholder="Enter Question Answer (3)" value="{{ old('Question_answer_3') }}" >
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="Question_answer_4" type="text" name="Question_answer_4" class="Question_answer_4 form-control"
                                                placeholder="Enter Question Answer (4)" value="{{ old('Question_answer_4') }}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                                 <br>
                             <h6><strong>Enter The Proper option Number </strong></h6>
                            <br><br>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="option_answer" type="text" name="option_answer" class="option_answer form-control"
                                                placeholder="Enter Proper option Number" value="{{ old('option_answer') }}" >
                                        </div>
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


                    var Question_name=document.getElementById("Question_name").value;
                    if(typeof Question_name == 'undefined' || Question_name == '')
                    {
                        toastr.error("Question name must be filled out");
                        //alert("Name must be filled out");
                         return false;
                    }

                   
                    var Question_answer_1=document.getElementById("Question_answer_1").value;
                  // alert(emp_fname);
                     if(typeof Question_answer_1 == 'undefined' || Question_answer_1 == '')
                    {
                        toastr.error("Question_answer_1 must be filled out");
                         return false;
                    }

                   

                    var Question_answer_2=document.getElementById("Question_answer_2").value;
                    //alert(emp_lname);
                     if(typeof Question_answer_2 == 'undefined' || Question_answer_2 == '')
                    {
                         toastr.error("Question_answer_2 must be filled out");
                         return false;
                    }

                
                    var Question_answer_3=document.getElementById("Question_answer_3").value;
                   
                     if(typeof Question_answer_3 == 'undefined' || Question_answer_3 == '')
                    {
                         toastr.error("Question_answer_3 must be filled out");
                         return false;
                    }


                    var Question_answer_4=document.getElementById("Question_answer_4").value;
                
                     if(typeof Question_answer_4 == 'undefined' || Question_answer_4 == '')
                    {
                         toastr.error("Question_answer_4 must be filled out");
                         return false;
                    }


                 
                     var option_answer=document.getElementById("option_answer").value;
                
                     if(typeof option_answer == 'undefined' || option_answer == '')
                    {
                         toastr.error("option_answer must be filled out");
                         return false;
                    }



                }

                                
     </script>
      <script>
           @if (Session::has('message_question'))
                                      toastr.success("{{Session::get('message_question')}}")
                                      @endif
     </script>
</body>

</html>