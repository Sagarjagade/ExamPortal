
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

[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
  position: absolute;
  opacity: 1;
  pointer-events:'';
}
    </style>
</head>

<body class="light">
  <?php //echo '<pre>';print_r($question_list);exit;?>
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
                                <h4 class="page-title">Add Exam</h4>
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
                                <strong>Add</strong> Exam</h2>

                                    



                          
                        </div>
                        {!! Form::open(array('name'=>'myform')) !!}
                        <div class="body">
                          
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="Exam_name" class="form-control  Exam_name " name="Exam_name" placeholder="Exam name Enter" value="{{ old('Exam_name') }}"/>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <Br><br>
                            <h4>Select Question to Assign on Exam</h4>
                            <br><br>

                        @foreach($question_list as $value)

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="checkbox" id="Exam_name" class="form_control Exam_name" name="Question_name[]"  value=" {{$value->id}}"/>
                                            <label>{{ $value->question}}</label>

                                        </div>
                                    </div>
                                </div>
                               
                            </div>

                            @endforeach
                           
                           

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


                    var Exam_name=document.getElementById("Exam_name").value;
                    if(typeof Exam_name == 'undefined' || Exam_name == '')
                    {
                        toastr.error("Exam name must be filled out");
                        //alert("Name must be filled out");
                         return false;
                    }



                }

                                
     </script>
     <script>
           @if (Session::has('message_Exam'))
                                      toastr.success("{{Session::get('message_Exam')}}")
                                      @endif
     </script>
</body>

</html>