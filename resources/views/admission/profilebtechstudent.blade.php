@extends('layouts/master')
@section('content')
<br><br>

<div class="card">
  <div class="card-header">
    <h3>Your Profile</h3>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
        <center>  <h1>
                            @php if(!empty($student->image))
                            {
                              @endphp
              <img src="{{ url('../../upload/'.$student->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
          @php }else{ @endphp
          
            <p>No Image Found</p>
          @php } @endphp 
                          </h1>
</center> 
<br>
<tr>
                      
                      <th>Task</th>
                      <th>Details</th>
                      
                    </tr>
                    <tr>
                     
                      <td>Full Name</td>
                      <td>{{$student->fullname}}</td>
                    </tr>
                    <tr>
                      
                      
                      <td>Mobile</td>
                      <td>{{$student->mobile}}</td>
                    </tr>
                    <tr>
                      
                      <td>Email</td>
                      <td>{{$student->email}}</td>
                    </tr>
                    <tr>
                    
                      
    </table>
    
  </div>
  <div class="card-footer">
    <center> <a href="{{url('editprofile/'.$student->id.'/edit')}}" class="btn btn-success"> Edit Profile</a></center>
  </div>
  
</div>

                     
              

@endsection