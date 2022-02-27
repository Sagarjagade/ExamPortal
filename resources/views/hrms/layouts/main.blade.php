<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Exam Portal</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ URL::asset('assetss/images/favicon.ico') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ URL::asset('assetss/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assetss/css/form.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ URL::asset('assetss/css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ URL::asset('assetss/css/styles/all-themes.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/core/main.min.css') }}" rel='stylesheet' />
    <link href="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/daygrid/main.min.css') }}" rel='stylesheet' />
    <link href="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/timegrid/main.min.css')}}" rel='stylesheet' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
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
    
      /*  input#emp_code
        {
            text-align: center;
            font-size: 20px;
            font-family: bold;
            color: black;
        }*/
    </style>
    @yield('css')
</head>

<body class="light">
    <!-- Page Loader -->
    @include('hrms.layouts.header')
    <!-- #Top Bar -->
    
    @include('hrms.layouts.sidebar')



  <!-- YIELD CONTENT -->

        @yield('content')

        <!-- /YIELD CONTENT -->



    <script src="{{ URL::asset('assetss/js/form.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assetss/js/pages/forms/form-data.js') }}"></script>

 <script src="{{ URL::asset('assetss/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assetss/js/admin.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/echart/echarts.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/pages/index.js') }}"></script>
    <!-- <script src="{{ URL::asset('assetss/js/pages/todo/todo.js') }}"></script> -->

   <!--  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="{{ URL::asset('assetss/js/table.min.js') }}"></script>
    <!-- Custom Js -->
    
    <script src="{{ URL::asset('assetss/js/pages/tables/jquery-datatable.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/pages/forms/flatpicker-data.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/pages/forms/ckeditor.js') }}"></script>
  
                <script>
   // CKEDITOR.disableAutoInline = true;
    //CKEDITOR.inline('ckeditor');
    CKEDITOR.replace( 'ckeditor' );
</script>

<script src="{{ URL::asset('assetss/js/bundles/amcharts4/animated.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/pages/attendance/attendance-data.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/amcharts4/core.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/amcharts4/charts.js') }}"></script>


    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/core/main.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/interaction/main.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/daygrid/main.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/timegrid/main.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/pages/apps/calendar.js') }}"></script>

    <!-- export table -->
    <script src="{{ URL::asset('assetss/js/bundles/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/export-tables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/export-tables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/export-tables/buttons.print.min.js') }}"></script>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 @stack('scripts')
<!-- -------------- /Scripts -------------- -->

</body>



</html>