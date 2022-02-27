
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
    <!-- Custom Css -->
    <link href="{{ URL::asset('assetss/css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ URL::asset('assetss/css/styles/all-themes.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/core/main.min.css') }}" rel='stylesheet' /><!-- 
    <link href="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/daygrid/main.min.css') }}" rel='stylesheet' />
    <link href="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/timegrid/main.min.css') }}" rel='stylesheet' /> -->

      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
    <style>
         .toast {
    left: 80%;
    height: 60px;
    top:10%;
    font-size: 14px;
    font-weight: bold;
    position: fixed;
    transform: translate(-50%, 0px);
    z-index: 9999;
  
}
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  margin-left: 100px;
}

#info{
    margin-left: 45px;
}

</style>
</head>

<body class="light">
    <!-- Page Loader -->
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
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="#">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
             @if(Session::get('employee_Desgination') == 'HR Manager' OR Session::get('employee_Desgination') == 'Admin' )
            <!-- <div class="row ">
                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-purple">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="far fa-window-restore"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Total Employee</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        {{$TotalEmp}}
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                    
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-blue-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Active Employee</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        {{ $ActiveTotalEmp }}
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                 
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Separation Employee</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                       {{ $SeparationEmp }}
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                   
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-money-check-alt"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Leave Balance</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        -
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                    
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            @endif
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="header">
                           
                       
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <!-- <strong>Employee Gender Ratio </strong> </h2> -->
                                <strong>Attendance</strong></h2>
                        </div>
                        <div class="body">
                            
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <div class="pull-right"> <div class="badge col-green">Present</div> &nbsp; &nbsp; <div class="badge col-red">Absent</div> </div>
                                    </div>
                                    <br><br>
                                     <div id='calendar'></div>
                                    
                                
                            </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                
                
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Birthday Reminders</h2>
                           
                        </div>
                        <div class="body">
                            
                                    <table>
                                        <tr>
                                            <th style="font-weight: bold;color: black"> Name </th>
                                            <th style="font-weight: bold;color: black"> Date </th>
                                        </tr>

                                       
                                            
                                       
                                    </table>
                        </div>
                    </div>
                </div>
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Check in out </strong> </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                               <div class="row"><div class="col-sm-12"><table class="table table-hover js-basic-example contact_list dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                        <tr role="row"><th class="center sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Date : activate to sort column descending" style="width: 119.825px;"> Date </th><th class="center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=" Check In : activate to sort column ascending" style="width: 127.1px;"> Check In </th><th class="center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=" Check Out : activate to sort column ascending" style="width: 145.288px;"> Check Out </th><th class="center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=" Working Hours : activate to sort column ascending" style="width: 195.475px;"> Working Hours </th></tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                        <tr class="gradeX odd">
                                                 @if(!empty($get_attendance_data))

                                                            @foreach($get_attendance_data as $records)
<?php //echo '<pre>';print_r($records);exit;?>

                            @if($records['shift'] == 'S-301')
                                                        <tr class="odd gradeX">
                                                            <td class="center"><?php echo date('Y-m-d', strtotime($records['emp_AttendanceDate'])); ?></td>

                                                            @if(date('h:i', strtotime($records['emp_InTime'])) != '12:00' )
                                                                       @if(date('h:i', strtotime($records['emp_InTime'])) > '08:54' and date('h:i', strtotime($records['emp_InTime']))  < '09:15' )
                                                                    <td class="center col-green"><?php echo date('h:i', strtotime($records['emp_InTime'])); ?></td>
                                                                    @else
                                                                            <td class="center col-red"><?php echo date('h:i', strtotime($records['emp_InTime'])); ?></td>
                                                                    @endif
                                                            @else
                                                            <td class="center ">-</td>
                                                            @endif

                                                            @if(date('H:i', strtotime($records['emp_OutTime'])) != '00:00')
                                                                    @if(date('h:i', strtotime($records['emp_OutTime'])) < '18:30'  )
                                                                                <td class="center col-green"><?php echo date('H:i', strtotime($records['emp_OutTime'])); ?></td>
                                                                            @else
                                                                                <td class="center col-red"><?php echo date('H:i', strtotime($records['emp_OutTime'])); ?></td>

                                                                            @endif
                                                            @else
                                                            <td class="center ">-</td>
                                                            @endif


                                                            @if(date('h:i', strtotime($records['emp_Duration'])) != '12:00')
                                                                  @if(date('h:i', strtotime($records['emp_Duration'])) < '09:30'  )
                                                                        <td class="center col-red"><?php echo date('h:i', strtotime($records['emp_Duration'])); ?></td>
                                                                    @else
                                                                            <td class="center col-green"><?php echo date('h:i', strtotime($records['emp_Duration'])); ?></td>
                                                                    @endif
                                                            @else
                                                            <td class="center">-</td>
                                                            @endif

                                                            
                                                        </tr>
                                                       

                                        @elseif($records['shift'] == 'S-302')
                                                        <tr class="odd gradeX">
                                                            <td class="center"><?php echo date('Y-m-d', strtotime($records['emp_AttendanceDate'])); ?></td>

                                                            @if(date('h:i', strtotime($records['emp_InTime'])) != '12:00' )
                                                                       @if(date('h:i', strtotime($records['emp_InTime'])) > '09:54' and date('h:i', strtotime($records['emp_InTime']))  < '10:15' )
                                                                    <td class="center col-green"><?php echo date('h:i', strtotime($records['emp_InTime'])); ?></td>
                                                                    @else
                                                                            <td class="center col-red"><?php echo date('h:i', strtotime($records['emp_InTime'])); ?></td>
                                                                    @endif
                                                            @else
                                                            <td class="center ">-</td>
                                                            @endif

                                                            @if(date('H:i', strtotime($records['emp_OutTime'])) != '00:00')
                                                                    @if(date('h:i', strtotime($records['emp_OutTime'])) > '19:30'  )
                                                                                <td class="center col-green"><?php echo date('H:i', strtotime($records['emp_OutTime'])); ?></td>
                                                                            @else
                                                                                <td class="center col-red"><?php echo date('H:i', strtotime($records['emp_OutTime'])); ?></td>

                                                                            @endif
                                                            @else
                                                            <td class="center ">-</td>
                                                            @endif


                                                            @if(date('h:i', strtotime($records['emp_Duration'])) != '12:00')
                                                                  @if(date('h:i', strtotime($records['emp_Duration'])) < '09:30'  )
                                                                        <td class="center col-red"><?php echo date('h:i', strtotime($records['emp_Duration'])); ?></td>
                                                                    @else
                                                                            <td class="center col-green"><?php echo date('h:i', strtotime($records['emp_Duration'])); ?></td>
                                                                    @endif
                                                            @else
                                                            <td class="center">-</td>
                                                            @endif

                                                            
                                                        </tr>


                                        @else
                                                    <tr class="odd gradeX">
                                                            <td class="center"><?php echo date('Y-m-d', strtotime($records['emp_AttendanceDate'])); ?></td>

                                                            @if(date('h:i', strtotime($records['emp_InTime'])) != '12:00' )
                                                                       @if(date('h:i', strtotime($records['emp_InTime'])) > '10:54' and date('h:i', strtotime($records['emp_InTime']))  < '11:15' )
                                                                    <td class="center col-green"><?php echo date('h:i', strtotime($records['emp_InTime'])); ?></td>
                                                                    @else
                                                                            <td class="center col-red"><?php echo date('h:i', strtotime($records['emp_InTime'])); ?></td>
                                                                    @endif
                                                            @else
                                                            <td class="center ">-</td>
                                                            @endif

                                                            @if(date('H:i', strtotime($records['emp_OutTime'])) != '00:00')
                                                                    @if(date('h:i', strtotime($records['emp_OutTime'])) < '20:30'  )
                                                                                <td class="center col-green"><?php echo date('H:i', strtotime($records['emp_OutTime'])); ?></td>
                                                                            @else
                                                                                <td class="center col-red"><?php echo date('H:i', strtotime($records['emp_OutTime'])); ?></td>

                                                                            @endif
                                                            @else
                                                            <td class="center ">-</td>
                                                            @endif


                                                            @if(date('h:i', strtotime($records['emp_Duration'])) != '12:00')
                                                                  @if(date('h:i', strtotime($records['emp_Duration'])) < '09:30'  )
                                                                        <td class="center col-red"><?php echo date('h:i', strtotime($records['emp_Duration'])); ?></td>
                                                                    @else
                                                                            <td class="center col-green"><?php echo date('h:i', strtotime($records['emp_Duration'])); ?></td>
                                                                    @endif
                                                            @else
                                                            <td class="center">-</td>
                                                            @endif

                                                            
                                                        </tr>

                                        @endif
                                                         
                                             @endforeach   

                                             @else

                                                <td class="center " colspan="5">No records Founds</td>

                                             @endif
                                                        </tr>

                                                    </tbody>
                                                   
                                                </table></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

                <!-- #END# Browser Usage -->
            </div>
            <div class="row">
                 <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Upcoming Holiday </strong></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                                <table>
                                        <tr>
                                            <th style="font-weight: bold;color: black"> Holiday Name </th>
                                            <th style="font-weight: bold;color: black"> Start Date </th>
                                            <th style="font-weight: bold;color: black"> End Date </th>
                                        </tr>

                                       
                                           
                                    </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Announment / News</h2>
                            
                        </div>
                        <div class="body">
                            <div id="echart_area_line" class="chartsh"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script src="{{ URL::asset('assetss/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assetss/js/admin.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/pages/index.js') }}"></script>

    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/core/main.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/interaction/main.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/daygrid/main.min.js') }}"></script>
    <script src="{{ URL::asset('assetss/js/bundles/fullcalendar/packages/timegrid/main.min.js') }}"></script><!-- 
    <script src="{{ URL::asset('assetss/js/pages/apps/calendar - dashboard.js') }}"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <!--<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>  -->
    <!--<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>-->
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.js"></script>


    <script>
        @if (Session::has('message'))
                                      toastr.success("{{Session::get('message')}}")
                                      @endif
                                
                            </script>
</body>

</html>