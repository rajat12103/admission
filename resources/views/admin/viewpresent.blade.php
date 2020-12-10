@extends('admin.home')

@section("content")
<input type="hidden" name="userid" value="{{auth::user()->id}}">

	<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 101</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/viewpresentstudent')}}">VIEW PRESENT STUDENT</a></center></h4>
   
  </div>
</div>

  <div class="card text-white bg-danger " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 102</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/viewpresentstudent102')}}">VIEW PRESENT STUDENT</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 103</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/viewpresentstudent103')}}">VIEW PRESENT STUDENT</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-danger " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 104</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/viewpresentstudent104')}}">VIEW PRESENT STUDENT</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 105</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/viewpresentstudent105')}}">ADD ATTENDENCE</a></center></h4>
   
  </div>
</div>


@endsection