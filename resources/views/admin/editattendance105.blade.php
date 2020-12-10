@extends('admin.home')


@section("content")

<div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <!-- <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="bootstrap-data-table-export_length"><label>Show <select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="bootstrap-data-table-export_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label></div></div></div> --><div class="row"><div class="col-sm-12"><table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Id</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 316px;">Roll No</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;">Full Name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Email</th>
                                            <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Contact Number</th> -->
                                            
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Attendance</th></tr>
                                    </thead>
                                    <tbody>   
                                    <form class="form-stacked" action="{{url('/updateattendance105')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                         @foreach($datas as $row)
                             <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->rollno}}</td>
                                <td>{{$row->fullname}}</td>
                                <td>{{$row->email}}</td>

                                <input type="hidden" name="user_id[]" value="{{$row->rollno}}">


                                <td>
                                    <input type="radio" name="attendance[{{$row->rollno}}]" value="Present" required="" <?php if($row->attendance=='Present'){echo "checked";} ?>>P
        <input type="radio" name="attendance[{{$row->rollno}}]" value="Absent" required="" <?php if($row->attendance=='Absent'){echo "checked";} ?>>A
                                </td>

                                 <input type="hidden" name="att_date" value="{{date("d/m/y")}}">
                                 <input type="hidden" name="att_year" value="{{date("Y")}}">
                                 <input type="hidden" name="month" value="{{date("F")}}">





                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                   
                    <button type="submit" class="btn btn-success">Update attendance</button>
                
              

                                        
                                    </form>
@endsection


		
