@extends('admin.home')

@section("content")
<input type="hidden" name="userid" value="{{auth::user()->id}}">

	<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;" >
  <div class="card-header"><center>ROOM NO. 101</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/roomattendance')}}">ADD ATTENDENCE</a></center></h4>
   
  </div>
</div>

  <div class="card text-white bg-danger " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 102</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/roomattendance102')}}">ADD ATTENDENCE</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 103</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/roomattendance103')}}">ADD ATTENDENCE</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-danger " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 104</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/roomattendance104')}}">ADD ATTENDENCE</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 105</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/roomattendance105')}}">ADD ATTENDENCE</a></center></h4>
   
  </div>
</div>


@endsection