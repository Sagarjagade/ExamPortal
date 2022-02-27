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
                                            <th class="center"> Employee Name </th>
                                            <th class="center"> Employee Code </th>
                                            <th class="center"> Exam Code Assign </th>
                                            <th class="center"> Exam Name</th>
                                            <th class="center">Delete Exam</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  $inc =1;?>
                                         @foreach($assignemptoexam as $key => $exam)
                                        <tr class="odd gradeX">
                                             <td class="center">{{ $exam->name }}</td>
                                             <td class="center">{{ $exam->emp_code }}</td>
                                            <td class="center">{{ $exam->ExamAssign }}</td>
                                            <td class="center">{{ $exam->Exam_name }}</td>
                                             <td class="center"> <a href="{{ url('delete_Assign_exam/'.$exam->emp_code) }}"  class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete</i>
                                                </a></td>
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

@push('scripts')
          
  <script>
           @if (Session::has('message_delete'))
                                      toastr.success("{{Session::get('message_delete')}}")
                                      @endif
     </script>

    @endpush
