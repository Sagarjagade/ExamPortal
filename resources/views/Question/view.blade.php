<!DOCTYPE html>

<html lang="en">

<?php //echo '<pre>';print_r($users);exit;?>

<head>

    <meta charset="UTF-8">

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Exam Portal</title>

    <!-- Favicon-->

     <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link rel="icon" href="{{ URL::asset('assetss/images/favicon.ico') }}" type="image/x-icon">

    <!-- Plugins Core Css -->

    <link href="{{ URL::asset('assetss/css/app.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assetss/css/form.min.css') }}" rel="stylesheet">

    <!-- Custom Css -->

    <link href="{{ URL::asset('assetss/css/style.css') }}" rel="stylesheet" />

     <link href="{{ URL::asset('assetss/css/multi-select.css') }}" rel="stylesheet" />

    <!-- You can choose a theme from css/styles instead of get all themes -->

    <link href="{{ URL::asset('assetss/css/styles/all-themes.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.2.5/css/tableexport.min.css">

    <style>

       .toast {

    left: 80%;

    height: 70px;

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

                                <h4 class="page-title">Exam List</h4>

                            </li>

                           

                        </ul>

                    </div>

                </div>

            </div>

            <div class="row" id="">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card">

                        <div class="header">

                            <h2>

                                <strong>Exam List</strong></h2>

                            

                        </div>

                        

                        <div class="body">

                                <br>

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

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <div class="form-line">

                                            

                                        </div>

                                    </div>

                                </div>

                            </div>

                            

                            

                            <div class="col-lg-12 p-t-20 text-center">

                                <!--<button type="submit" id="submit_records" class="btn btn-primary waves-effect m-r-15" >Export Data</button>-->

                                <button type="submit" id="submit_records" class="btn btn-primary waves-effect m-r-15" >submit</button>

                                 <button type="button" onclick="location.reload()" class="btn btn-info waves-effect m-r-15" >Refresh</button>

                            </div>

                        

                        

                    </div>

                </div>

            </div>

        </div>





        <!-- loading Page -->

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row">

                        <div class="container">

                        <div class="col-md-12">

                          <center><img src="{{ URL::asset('assetss/images/Loding.gif') }}" id="img" style="display:none;    width: 100px;height: 100px"/ ></center><br>

                        </div>

                        </div>

                      </div>

                  </div>

              </div>

          </div>





        <div class="container-fluid">

            <div class="row" id="tab_records">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="card">

                        <div class="body" id="table_data">

                            <div class="table-responsive " id="result">

                                

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>





    </section>





<script src="{{ URL::asset('assetss/js/app.min.js')}}"></script>

    <script src="{{ URL::asset('assetss/js/form.min.js')}}"></script>

    <!-- Custom Js -->

    <script src="{{ URL::asset('assetss/js/admin.js')}}"></script>

    <script src="{{ URL::asset('assetss/js/pages/forms/form-data.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

   

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>



    <script src="{{ URL::asset('assetss/js/table.min.js') }}"></script>

    <!-- Custom Js -->

<!-- Datatable JS -->



 <script src="{{ URL::asset('assetss/js/pages/tables/jquery-datatable.js') }}"></script>

  

    <!-- export table -->

    <script src="{{ URL::asset('assetss/js/bundles/export-tables/dataTables.buttons.min.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bundles/export-tables/buttons.flash.min.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bundles/export-tables/jszip.min.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bundles/export-tables/pdfmake.min.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bundles/export-tables/vfs_fonts.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bundles/export-tables/buttons.html5.min.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bundles/export-tables/buttons.print.min.js') }}"></script>

    

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>



      <script src="https://cdn.rawgit.com/eligrey/FileSaver.js/e9d941381475b5df8b7d7691013401e171014e89/FileSaver.min.js"></script>

     <!--   <script src="{{ URL::asset('assetss/js/tableexport.min.js')}}"></script> -->

       <script src="{{ URL::asset('assetss/js/tableexport.js')}}"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.5/js/tableexport.min.js"></script> -->



      <!-- <script src="{{ URL::asset('assetss/js/jquery.multi-select.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bootstrap-colorpicker.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/advanced-form-elements.js') }}"></script> -->

</script>



<script>

    $(window).on('load',function()

    {

        $('#tab_records').hide();



    });





    //

    $(document).ready(function(){

        $('#submit_records').on('click',function(){

            

          

            var Exam_id = $('#ExamAssign').val();

             if(Exam_id == 'Select Exam' || Exam_id == null)

            {

                  toastr.error("Select Exam must be select");

                         return false;

            }else

            {

                    $('#img').show();



                    $.ajax({

                        url:"{{ url('View_exam') }}",

                        type:'post',

                        dataType:'json',

                        data:{

                            Exam_id:Exam_id

                        },

                        success:function(response)

                        {



                            console.log(response.msg);

                            $('#img').hide();

                            $('#tab_records').show();

                           

                         $('#result').html(response.msg);

                         
                                       

                        }

                    })

                }

        })

    })









    //





</script>




</body>



</html>