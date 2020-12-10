@extends('admin.home')

@section("content")
<input type="hidden" name="userid" value="{{auth::user()->id}}">

	<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;" >
  <div class="card-header"><center>CSE</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/branchallotment101')}}"></a></center></h4>
   
  </div>
</div>

  <div class="card text-white bg-danger " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 102</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/branchallotment102')}}">ALLOT BRANCH</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 103</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/branchallotment103')}}">ALLOT BRANCH</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-danger " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 104</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/branchallotment104')}}">ALLOT BRANCH</a></center></h4>
   
  </div>
</div>

<div class="card text-white bg-dark " style="min-width: 27rem; margin: 20px; float: left;">
  <div class="card-header"><center>ROOM NO. 105</center></div>
  <div class="card-body">
    <h4 class="card-title"><center><a href="{{url('/branchallotment105')}}">ALLOT BRANCH</a></center></h4>
   
  </div>
</div>


@endsection