@extends('hrms.layouts.main')

@section('content')
<?php //echo '<pre>';print_r($finalresult_emp);exit;?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Results :</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="#">
                                    <i class="fas fa-home"></i> </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Final Result :</strong> 
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table id="tableExport"
                                    class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    <thead>
                                        <tr>
                                            
                                            <th class="center"> Right Answers </th>
                                            <th class="center"> Wrong Answers </th>
                                            <th class="center"> Total Question </th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  $inc =1;?>
                                         @foreach($finalresult_emp as $key => $holiday)
                                        <tr class="odd gradeX">
                                            <td class="center">{{ $holiday->FinalRecords }}</td>
                                            <td class="center">{{ $holiday->QuestionCount - $holiday->FinalRecords   }}</td>
                                            <td class="center">{{ $holiday->QuestionCount }}</td>
                                        </tr>

                                     

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
