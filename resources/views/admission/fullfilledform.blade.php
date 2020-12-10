@extends('layouts.master')

@section("content")
<img src="{{URL::to('/')}}/images/BG1.jpg" style="height: 400px; width: 100%">
<center><h4 style="margin-top: 10px;"><a href="{{url('btechbsf/'.$obj->id.'/print')}}">Click Here to print your form</a></h4></center>
@endsection