@extends('admin.home')

@section("content")
<input type="hidden" name="userid" value="{{auth::user()->id}}">

	<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>BSF STUDENTS</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/generatemeritbsf')}}">Generate Merit</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-danger " style="min-width: 27rem;   margin: 20px; float: left;">
  <div class="card-header"><center>CAPFS STUDENTS</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/generatemeritcapfs')}}">Generate Merit</a></center></h4>
   
  </div>
</div>
@endsection