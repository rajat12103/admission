@extends('admin.home')


@section("content")

<div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <!-- div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="bootstrap-data-table-export_length"><label>Show <select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="bootstrap-data-table-export_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label></div></div></div> --><div class="row"><div class="col-sm-12"><table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                    <thead>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 316px;">Roll No</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;">Full Name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Email</th>
                                            <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Contact Number</th> -->
                                            
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Attendance</th>
                                         <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">10th</th>
                                      <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">12th</th>
                                   <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Migration</th>
                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Service Certificate</th>
                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Branch</th>
                             <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Attendance</th> -->
                         </tr>
                                    </thead>
                                    <tbody>   
                                    <form class="form-stacked" action="{{url('/allotbranch102')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                         @foreach($datas as $row)
                             <tr>
                                
                                <td>{{$row->rollno}}</td>
                                <td>{{$row->fullname}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->attendance}}</td>

                                <input type="hidden" name="user_id[]" value="{{$row->rollno}}">

                              
                                <td>{{$row->tenth_doc_present}}</td>
                                <td>{{$row->twe_doc_present}}</td>
                                <td>{{$row->migration_present}}</td>
                                <td>{{$row->service_present}}</td>
                               
                                <td> 
                                    <input type="radio" name="branch[{{$row->rollno}}]" value="CSE" required="">CSE
                                    <br>
        <input type="radio" name="branch[{{$row->rollno}}]" value="IT" required="">IT
        <br>
        <input type="radio" name="branch[{{$row->rollno}}]" value="AU" required="">AU 
        <br>           <input type="radio" name="branch[{{$row->rollno}}]" value="ME" required="">ME<br>
        <input type="radio" name="branch[{{$row->rollno}}]" value="EE" required="">EE<br>
        <input type="radio" name="branch[{{$row->rollno}}]" value="EC" required="">EC<br>
                   
                   </td>




                            </tr>
                           @endforeach

                        </tbody>
                    </table>
                  
                     @if(!empty($row->branch))
                    <h4>Branch already alloted</h4>

                    @else
                
                
                    <button type="submit" class="btn btn-success">Allot Branch</button>
                    @endif
               

                                        
                                    </form>
@endsection


        
