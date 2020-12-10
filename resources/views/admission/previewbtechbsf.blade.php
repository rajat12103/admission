@extends('layouts.master')
@section('content')
<div style="margin: 20px">

             <div class="box">
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <h4>Personal Detail</h4>
                      <hr>
                       <center><div class="col-md-6" style="text-align: right;">
                            @php
                            if(!empty($obj->image)){
                            @endphp
                            <img class="image mr-12 mb-4" style="width:180px; height:170px; text-align:right; border-radius: 100%"  src="{{ url('upload/'.$obj->image)}}" alt="image">
                            @php } else{ @endphp
                             <h3>No Image Found</h3>
                              @php}@endphp
                              <br>
                        </div></center>
                   
                    </tr>
                    <br>
                    <tr>
                      <td colspan="2">Fullname</td>
                      <td colspan="2">{{$obj->fullname}}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{$obj->email}}</td>
                      <td>
                        Mobile Number
                      </td>
                      <td>{{ $obj->phone }}</td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td>{{$obj->gender}}</td>
                      <td>
                       Dob
                      </td>
                      <td>{{$obj->dob}}}</td>
                    </tr>
                    <tr>
                      <td>Father Name</td>
                      <td>{{$obj->father_name}}</td>
                      <td>
                        Mother Name
                      </td>
                      <td>{{$obj->mother_name}}</td>
                    </tr>
                    <tr>
                      <td>Father Email</td>
                      <td>{{$obj->father_email}}</td>
                      <td>
                     Father Contact
                      </td>
                      <td>{{$obj->father_mob}}</td>
                    </tr>
                    <tr>
                      <td>Aadhar No.</td>
                      <td>{{$obj->aadhar}}</td>
                      <td>
                        Identification Mark
                      </td>
                      <td>{{$obj->identification}}</td>
                    </tr>
                 </table>

                  <!-- step 2 -->
                  <br>
                  <table class="table table-bordered">
                      <tr>
                      <h4>Communication Address</h4>
                      
                    </tr>
                    <br>
                    <tr>
                      <td>House No</td>
                      <td>{{$obj->house}}</td>
                      <td>
                       Landmark
                      </td>
                      <td>{{$obj->landmark}}</td>
                    </tr>
                    <tr>
                      <td>Street</td>
                      <td>{{$obj->street}}</td>
                      <td>
                        City
                      </td>
                      <td>{{ $obj->city }}</td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td>{{$obj->state}}</td>
                      <td>
                       pin
                      </td>
                      <td>{{$obj->pincode}}</td>
                    </tr>
                    
                  </table>
                  <br>
                  <!--permanent address-->
                   <table class="table table-bordered">
                      <tr>
                      <h4>Permanent Address</h4>
                      <br>
                    </tr>
                    <tr>
                      <td>House No</td>
                      <td>{{$obj->house1}}</td>
                      <td>
                       Landmark
                      </td>
                      <td>{{$obj->landmark1}}</td>
                    </tr>
                    <tr>
                      <td>Street</td>
                      <td>{{$obj->street1}}</td>
                      <td>
                        City
                      </td>
                      <td>{{ $obj->city1 }}</td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td>{{$obj->state1}}</td>
                      <td>
                       pin
                      </td>
                      <td>{{$obj->pincode1}}</td>
                    </tr>
                    
                  </table>
                  <br>
                   <table class="table table-bordered">
                      <tr>
                      <h4>10<sup>th</sup>&nbsp;Detail</h4>
                      
                    </tr>
                    <br>
                    <tr>
                      <td>School</td>
                      <td>{{$obj->te_school}}</td>
                      <td>
                      Board
                      </td>
                      <td>{{$obj->te_board}}</td>
                    </tr>
                    <tr>
                      <td>Subject</td>
                      <td>{{$obj->te_subject}}</td>
                      <td>
                       Roll No.
                      </td>
                      <td>{{ $obj->te_rollno }}</td>
                    </tr>
                    <tr>
                      <td>System Type</td>
                      <td>{{$obj->te_system}}</td>
                      <td>
                      Year of passing
                      </td>
                      <td>{{$obj->te_passing}}</td>
                    </tr>
                     <tr>
                      <td>Percentage</td>
                      <td>{{$obj->te_percentage}}</td>
                      <td>
                      CGPA
                      </td>
                      <td>{{ $obj->te_cgpa }}</td>
                    </tr>
                    <tr>
                      <td colspan="2">10th Marksheet</td>
                      <td colspan="2"> @php
                            if(!empty($obj->te_marksheet)){
                            @endphp
                            <img class="image mr-12 mb-4" style="width:180px; height:170px; text-align:right; "  src="{{ url('upload/'.$obj->te_marksheet)}}" alt="te_marksheet">
                            @php } else{ @endphp
                             <h3>No Image Found</h3>
                              @php}@endphp</td>
                    </tr>

                    
                  </table>
                  
                  <br>
                   <table class="table table-bordered">
                      <tr>
                      <h4>12<sup>th</sup>&nbsp;Detail</h4>
                      
                    </tr>
                    <br>
                    <tr>
                      <td>School</td>
                      <td>{{$obj->tw_school}}</td>
                      <td>
                      Board
                      </td>
                      <td>{{$obj->tw_board}}</td>
                    </tr>
                    <tr>
                      <td>Result</td>
                      <td>{{$obj->tw_result}}</td>
                      <td>
                       Roll No.
                      </td>
                      <td>{{ $obj->tw_rollno }}</td>
                    </tr>
                    <tr>
                      <td>System Type</td>
                      <td>{{$obj->tw_system}}</td>
                      <td>
                      Year of passing
                      </td>
                      <td>{{$obj->tw_passing}}</td>
                    </tr>
                     <tr>
                      <td>Percentage</td>
                      <td>{{$obj->tw_percentage}}</td>
                      <td>
                      CGPA
                      </td>
                      <td>{{ $obj->tw_cgpa }}</td>
                    </tr>
                    
                    <tr>
                      <td>JeeMain Roll No</td>
                      <td>{{$obj->jee_roll_no}}</td>
                      <td>
                    JEE Percentile
                      </td>
                      <td>{{ $obj->jee_perc }}</td>
                    </tr>
                    <tr>
                      <td colspan="2">12th Marksheet</td>
                      <td colspan="2"> @php
                            if(!empty($obj->tw_certificate)){
                            @endphp
                            <img class="image mr-12 mb-4" style="width:180px; height:170px; text-align:right; "  src="{{ url('upload/'.$obj->tw_certificate)}}" alt="tw_certificate">
                            @php } else{ @endphp
                             <h3>No Image Found</h3>
                              @php}@endphp</td>
                    </tr>
                    
                  </table>
<br>

<table class="table table-bordered">
                      <tr>
                      <h4>Others Detail</h4>
                      
                    </tr>
                    <br>
                    <tr>
                      <td>Nationality</td>
                      <td>{{$obj->nationality}}</td>
                      <td>
                      Religion
                      </td>
                      <td>{{$obj->religion}}</td>
                    </tr>
                    <tr>
                      <td>Category</td>
                      <td>{{$obj->category}}</td>
                      <td>
                       Other Religion
                      </td>
                      <td>{{ $obj->otherrel }}</td>
                    </tr>
                    <tr>
                      <td>If Physically Hanidcapped(PWD)</td>
                      <td>{{$obj->phy_hand}}</td>
                      <td>
                      Are You A Resident Of J&K?
                      </td>
                      <td>{{$obj->jkresident}}</td>
                    </tr>
                     <tr>
                      <td colspan="2">If Yes,Enter PWD Details</td>
                      <td colspan="2">{{$obj->pwd}}</td>
                    </tr>
                    <tr>
                      <td colspan="2">Domicile Of J&K</td>
                      <td colspan="2"> @php
                            if(!empty($obj->domicile)){
                            @endphp
                            <img class="image mr-12 mb-4" style="width:180px; height:170px; text-align:right; "  src="{{ url('upload/'.$obj->domicile)}}" alt="domicile">
                            @php } else{ @endphp
                             <h3>Not Uploaded</h3>
                              @php}@endphp</td>
                    </tr>

                  </table>

                  <table class="table table-bordered">
                      <tr>
                      <h4>Parents Organisation Details</h4>
                      
                    </tr>
                    <br>
                    <tr>
                      <td>Organisation In Which Your Parent Belong</td>
                      <td>{{$obj->orga}}</td>
                      <td>
                      Rank
                      </td>
                      <td>{{$obj->bsf_rank}}</td>
                    </tr>
                    <tr>
                      <td>Unit Name</td>
                      <td>{{$obj->unit}}</td>
                      <td>
                      Unit Address
                      </td>
                      <td>{{ $obj->unitadd }}</td>
                    </tr>
                    <tr>
                      <td colspan="2">Force in CAPF</td>
                      <td colspan="2">{{$obj->capf_org}}</td>
                    </tr>
                    <tr>
                      <td colspan="2">Service Certificate</td>
                      <td colspan="2"> @php
                            if(!empty($obj->ser_certificate)){
                            @endphp
                            <img class="image mr-12 mb-4" style="width:180px; height:170px; text-align:right; "  src="{{ url('upload/'.$obj->ser_certificate)}}" alt="ser_certificate">
                            @php } else{ @endphp
                             <h3>Not Uploaded</h3>
                              @php}@endphp</td>
                    </tr>
                     
                  </table>
                  
                </div><!-- /.box-body -->
                  <hr>
                <div class="row mt-4 pl-3">
                    <div class="form-group col-sm-6">
                        <a href="{{url('btechbsf/'.$obj->id.'/edit')}}" class="btn btn-block btn-info pull-right"><i class="fa fa-fw fa-rotate-left"></i>Edit Details</a>&nbsp;<center class="back-tag"></center>
                    </div>

                    <div class="form-group col-sm-6">
                        <a href="{{url('btechbsf/'.$obj->id.'/submit')}}" class="btn btn-block btn-info pull-right"><i class="fa fa-lock"></i>&nbsp;Submit</a>&nbsp;<center class="back-tag"></center>
                    </div>

                </div>

               

        </div>
       

       






              





@endsection
