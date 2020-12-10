@extends('layouts/master')
@section('content')
   


   <section class="content">
      
      <!-- vertical wizard -->
     
      
      <!-- /.box -->
     
     <!-- Step wizard -->
     <br>
      <div class="box box-default">
        <div class="box-header with-border">
         <center> <h4 class="box-title" style="margin-top: 15px;">Update profile</h4></center>
         <hr>
               
      
        </div>
        <!-- /.box-header -->
        <div class="box-body wizard-content">
      <form action="/profile_update" method="post" enctype="multipart/form-data" class="valnameation-wizard wizard-circle">
        <!-- Step 1 -->
        
        {{csrf_field()}} 
        <input type="hidden" name="id" value="{{$student->id}}">
        
        
        <br><br>

             
        <section>
          
            <div class="col-md-12">
              <div class="form-group">
                <label for="fullname">Full Name :<span class="danger">*</span></label>
                <input type="text"  class="form-control" value="{{$student->fullname}}" name="fullname"> </div>
            </div>
          
          
           <div class="col-md-12">
              <div class="form-group">
                <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                <input type="email" class="form-control" value="{{$student->email}}" name="email" > </div>
            </div>
              <div class="col-md-12">
              <div class="form-group">
                <label for="wphoneNumber2">Phone Number :<span class="danger">*</span></label>
                <input type="tel" class="form-control" value="{{$student->mobile}}" name="mobile"> </div>
            </div>
         <center> <button type="submit" class="btn btn-success">Update profile</button></center>
          
        </section>

      </form>
 


@endsection