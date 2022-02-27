@extends('hrms.layouts.main')

@section('content')
<?php //echo '<pre>';print_R($emps);exit;?>

   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">All Students</h4>
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
                                <strong>All</strong> Student
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th class="center">Student Code</th>
                                            <th class="center"> Student Name </th>
                                            <th class="center"> Role </th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        @foreach($emps as $records)
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                                {{ $records->emp_code}}
                                            </td>
                                            <td class="center">{{ $records->name}}</td>
                                            <td class="center">{{ $records->role}}</td>
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

    <!-- model call -->

    




    @endsection
    @push('scripts')
          

            <script>
               /* $(document).ready(function(){
                        $('#Delete_emp').on('click', function(){

                            var id = $('#empcode').val();
                          // var _token = $('input[name="_token"]').val();



                            $.ajax({
                                url:'delete-emp',
                                type:'POST',
                                processData: false,
                                contentType: false,
                                data:{
                                    id:1
                                },
                                success:function(response)
                                {
                                    console.log(response);
                                }
                            })

                        })
                    
                });*/
            </script>

    @endpush