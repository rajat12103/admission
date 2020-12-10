@extends('admin.home')

@section("content")
<div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                               <!--  <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"> --><!-- <div class="dataTables_length" id="bootstrap-data-table-export_length"><label>Show <select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="bootstrap-data-table-export_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label></div></div></div><div class="row"> --><div class="col-sm-12"><table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Id</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 316px;">jee rank</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;">Full name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108px;">Contact Number</th><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Print Form</th>
                                    </thead>
                                    <tbody>   
                                        
                                        <?php
                                $i=1;
                                ?>
                                         @foreach($data1 as $data)
                            <tr>
    

                                <td>{{$i++}}</td>
                                <td>{{$data->jee_rank}}</td>
                                <td>{{$data->fullname}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                               <td><a href="{{url('/student/print/' .$data->id)}}">Print</a></td>
                                <!-- <td>@php if(!empty($data->image)){
                        @endphp
                        <img src="{{url('/images/'.$data->image)}}" style="height: 150px; width: 150px; border-radius: 100%;">
                        @php}else{ @endphp

                                    <p>No Image Found</p>
                                @php} @endphp</td>
                                <td><a href="{{url('/franchise/edit/' .$data->id)}}">Edit</a>
                                    <br>
                                    <a href="{{url('/franchise/view/' .$data->id)}}">View Details</a>
                                <a href="{{url('/franchise/delete/' .$data->id)}}">Delete</a>
                            </td> -->
                              </tr> 
                                    @endforeach</tbody>
                                </table>
                            </div><!-- </div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="bootstrap-data-table-export_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table-export_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="bootstrap-data-table-export_previous"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="bootstrap-data-table-export_next"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div> --></div>
                            </div>
                        </div>

@endsection