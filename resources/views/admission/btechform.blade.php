@extends('layouts.master')

@section("content")



<section class="content">
      
      <!-- vertical wizard -->
     
      
      <!-- /.box -->
     
     <!-- Step wizard -->
      <div class="box box-default" style="margin-bottom: 15px;">
        <div class="box-header with-border" style="margin-top: 10px">
         <center> <h4 class="box-title">Registration Form</h4></center>
         <hr>
               
      
        </div>
        <!-- /.box-header -->
        <div class="box-body wizard-content">
      <form action="/btechbsf_store" method="post" enctype="multipart/form-data" class="valnameation-wizard wizard-circle">
        <!-- Step 1 -->
        
        {{csrf_field()}}
        
        <input type="hidden" name="userid" value="{{auth::user()->id}}">
        
        <span class="badge bg-green"><h4>Personal Details</h4></span>

<br><br>

             
        <section>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="fullname">Full Name :<span class="danger">*</span></label>
                <input type="text"  class="form-control cap" onkeyup="capfun()" value="{{auth::user()->fullname}}" name="fullname" readonly="" > </div>
            </div>
           <!--  <div class="col-md-6">
              <div class="form-group">
                <label for="lastname"> Last Name : <span class="danger">*</span> </label>
                <input type="text" class="form-control cap" onkeyup="capfun()" value="{{auth::user()->lastname}}"name="lastname" readonly=""> </div>
            </div> -->
          </div>
          <div class="row">
           <div class="col-md-6">
              <div class="form-group">
                <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                <input type="email" class="form-control cap" value="{{auth::user()->email}}" onkeyup="capfun()" name="email" readonly=""> </div>
            </div>
              <div class="col-md-6">
              <div class="form-group">
                <label for="wphoneNumber2">Phone Number :<span class="danger">*</span></label>
                <input type="tel" class="form-control cap" onkeyup="capfun()" value="{{auth::user()->mobile}}" name="phone" readonly=""> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstName5">Father's Name :<span class="danger">*</span></label>
                <input type="text" class="form-control cap" onkeyup="capfun()" name="father_name" > </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">Mother's Name :<span class="danger">*</span></label>
                <input type="text" class="form-control cap" name="mother_name" onkeyup="capfun()"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="location3">Gender: <span class="danger">*</span></label>
                <select class="custom-select form-control cap" name="gender" value="{{old('gender')}}">
                  <option value="">Gender</option>
                  <option value="female">female</option>
                  <option value="male">Male</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="date1">Date Of Birth<span style="font-size: 10px">*(As per 10th marksheet)</span>:</label>
                <input type="date" name="dob" class="form-control cap" value="{{old('dob')}}"> </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Father's Email Address :<span class="danger">*</span></label>
                <input type="text" class="form-control cap" value="{{old('father_email')}}" name="father_email"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">Father's Mobile :<span class="danger">*</span></label>
                <input type="text" class="form-control cap " value="{{old('father_mob')}}" name="father_mob"> </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Aadhaar No. :<span class="danger">*</span></label>
                <input type="text" class="form-control cap"  value="{{old('aadhar')}}"  name="aadhar"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">identification Mark :<span style="font-size: 10px">(optional)</span></label>
                <input type="text" class="form-control cap "  value="{{old('identification')}}"  name="identification"> </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label for="image">Image Upload</label>
                <input type="file" name="image" value="{{old('image')}}" class="form-control cap" >
            </div>
           </div>
           </div>
<br>
             <span style="font-size: 10px;"><h4>Communication Address</h4></span><hr>
             <br>
             <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">House No. :</label>
                <input type="text" class="form-control cap" value="{{old('house')}}" name="house" > </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">Street Name :</label>
                <input type="text" class="form-control cap"  value="{{old('street')}}" name="street"> </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">landmark :<span style="font-size: 10px">(optional)</span></label>
                <input type="text" class="form-control cap "  value="{{old('landmark')}}"name="landmark"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">city :</label>
                <input type="text" class="form-control cap"  value="{{old('city')}}" name="city"> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">state :</label>
                <input type="text" class="form-control cap"  value="{{old('state')}}" name="state"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">pin :</label>
                <input type="text" class="form-control cap"  value="{{old('pincode')}}" name="pincode"> </div>
            </div>
          </div>
           <label>Same as Correspondence Address</label>
          <input type="checkbox" name="same_address" class="same_add" onclick="add_copy(this.form)"><br><br>

           <span style="font-size: 10px; "><h4>Permanent Address</h4></span>
           <hr><br>

             <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">House No. :</label>
                <input type="text" class="form-control cap" value="{{old('house1')}}" name="house1"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">Street Name :</label>
                <input type="text" class="form-control cap" value="{{old('street1')}}" name="street1"> </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">landmark :<span style="font-size: 10px">(optional)</span></label>
                <input type="text" class="form-control cap" value="{{old('landmark1')}}" name="landmark1"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">city :</label>
                <input type="text" class="form-control cap" value="{{old('city')}}" name="city1"> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">state :</label>
                <input type="text" class="form-control cap" value="{{old('state1')}}" name="state1"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">pin :</label>
                <input type="text" class="form-control cap" value="{{old('pincode1')}}" name="pincode1"> </div>
            </div>
          </div>

         
        </section>
        <!-- Step 2 -->
        
        <span class="badge bg-green"><h4>Education Details</h4></span>
        <hr>
        <br>
        <section>
          <span style="font-size: 16px; color: red">10th Details</span><br><br><br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="jobTitle3">School/College Name  :</label>
                <input type="text" class="form-control cap" value="{{old('te_school')}}" name="te_school">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="webUrl3">Board:</label>
                <input type="text" class="form-control cap"value="{{old('te_board')}}" name="te_board"> </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Subject :</label>
                <input type="text" class="form-control cap" value="{{old('te_subject')}}"name="te_subject"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">Year of Passing :</label>
                <input type="text" class="form-control cap" value="{{old('te_passing')}}" name="te_passing"> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Roll No. :</label>
                <input type="text" class="form-control cap" value="{{old('te_rollno')}}" name="te_rollno"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">System Type :</label>
                 <select class="custom-select form-control cap" name="te_system" value="te_system">
                  <option value="">   </option>
                  <option value="marking">Marking</option>
                  <option value="grading">Grading</option>
                  
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Percentage :</label>
                <input type="text" class="form-control cap"value="{{old('te_percentage')}}" name="te_percentage"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">CGPA :</label>
                <input type="text" class="form-control cap" value="{{old('te_cgpa')}}" name="te_cgpa"> </div>
            </div>
          </div>
           <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label for="image" >10th Marksheet</label>
                <input type="file" value="" class="form-control cap" name="te_marksheet">
            </div>
           </div>
           </div>
           <br>
          
          <span style="font-size: 16px; color: red">12th Details</span><br><br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">School/College Name :</label>
                <input type="text" class="form-control cap" value="{{old('tw_school')}}" name="tw_school"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">Board :</label>
                <input type="text" class="form-control cap" value="{{old('tw_board')}}" name="tw_board"> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Year of Passing  :</label>
                <input type="text" class="form-control cap" value="{{old('tw_passing')}}" name="tw_passing"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">Result Status :</label>
                <select class="custom-select form-control cap" value="{{old('tw_result')}}"  name="tw_result">
                  <option value="">  </option>
                  <option value="pass">Pass</option>
                  <option value="awaited">Awaited</option>
                  
                </select> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Roll No. :</label>
                <input type="text" class="form-control cap" value="{{old('tw_rollno')}}" name="tw_rollno"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">System Type :</label>
                <select class="custom-select form-control cap" value="{{old('tw_system')}}" name="tw_system" >
                  <option value="">  </option>
                  <option value="marking">Marking</option>
                  <option value="grading">Grading</option>
                  
                </select> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">Percentage :</label>
                <input type="text" class="form-control cap" value="{{old('tw_percentage')}}" name="tw_percentage"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">CGPA :</label>
                <input type="text" class="form-control cap" value="{{old('tw_cgpa')}}" name="tw_cgpa"> </div>
            </div>
          </div>
           <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label for="image" >12th Marksheet/12th Admit Card</label>
                <input type="file" class="form-control cap" name="tw_certificate">
            </div>
           </div>
           </div>
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="location3">Eligibility:</label>
                <select class="custom-select form-control cap" value="{{old('eligibility')}}" name="eligibility">
                  <option value="">Eligibility</option>
                  <option value="JEE based">JEE based</option>
                  <option value="12th based">12th based</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">JEE Mains RollNo.:</label>
                <input type="text" class="form-control cap " value="{{old('jee_roll_no')}}" name="jee_roll_no"> </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline1">AIR Rank :</label>
                <input type="text" class="form-control cap" value="{{old('jee_rank')}}" name="jee_rank"> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressline2">JEE Percentile :</label>
                <input type="text" class="form-control cap" value="{{old('jee_perc')}}" name="jee_perc"> </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label for="image" >JEE Marksheet/JEE Admit Card</label>
                <input type="file"  value="" class="form-control cap" name="jee_certificate">
            </div>
           </div>
           </div>
          
        </section>
        <br>
        <!-- Step 3 -->
       <span class="badge bg-green"><h4>Other Details</h4></span>
       <hr>
        <section>
        	<br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nationality :</label>
                <select class="custom-select form-control cap" value="{{old('nationality')}}" name="nationality">
                  <option value=""></option>
                  <option value="indian">Indian</option>
                  <option value="nri">NRI</option>
                </select>
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Category :</label>
                <select class="custom-select form-control cap" value="{{old('category')}}" name="category">
                  <option value=""></option>
                  <option value="geb">GEN</option>
                  <option value="st">ST</option>
                  <option value="sc">SC</option>
                  <option value="obc">OBC</option>
                </select>
              </div>
            </div>
          </div>
              
              <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Religion :</label>
                <select class="custom-select form-control cap" value="{{old('religion')}}" name="religion" >
                  <option value=""></option>
                  <option value="hindu">Hindu</option>
                  <option value="muslim">Muslim</option>
                  <option value="sikh">Sikh</option>
                  <option value="cristian">Cristian</option>
                  <option value="other">other</option>
                </select>
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Other Religion :</label>
                <input type="text" class="form-control cap" value="{{old('otherrel')}}" name="otherrel"> 
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>if Physician handicaped(PWD)? :</label>
                <select class="custom-select form-control cap" value="{{old('phy_hand')}}" name="phy_hand">
                  <option value=""></option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                 
                </select>
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>If yes Enter PWD Detail :</label>
                <input type="text" class="form-control cap" value="{{old('pwd')}}" name="pwd"> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Are You a Resnameent of J&K :</label>
                <select class="custom-select form-control cap" value="{{old('jkresident')}}"  name="jkresident">
                  <option value=""></option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                 
                </select>
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>If yes Upload Domicile of J&K :</label>
                <input type="file" class="form-control cap" value="{{old('domicile')}}" name="domicile"> 
              </div>
            </div>
          </div>
          <br>
            <span style="font-size: 10px; "><h4>Parents organization details</h4></span> <hr><br> 
              
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Organisation In Which Your Parent Belong :</label>
                <select class="custom-select form-control cap" value="{{old('orga')}}" name="orga" >
                  <option value=""></option>
                  <option value="bsf">BSF</option>
                  <option value="capfs">CAPFs</option>
                 
                </select>
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Rank :</label>
                <select class="custom-select form-control cap  " value="{{old('bsf_rank')}}" name="bsf_rank">
                  <option value=""></option>
                  <option value="Officer">Officer's</option>
                  <option value="SOs">SOs</option>
                  <option value="ORs">ORs</option>
                  <option value="widow">widow</option>
                 
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Unit Name :</label>
               <input type="text" class="form-control cap" value="{{old('unit')}}" name="unit">
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Unit Address :</label>
                <input type="text" class="form-control cap" value="{{old('unitadd')}}" name="unitadd">
              
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Force in CAPF :</label>
               <select class="custom-select form-control cap" value="{{old('capf_org')}}" name="capf_org">
                  <option value=""></option>
                  <option value="CRPF">CRPF</option>
                  <option value="CISF">CISF</option>
                  <option value="ITBP">ITBP</option>
                  <option value="SSB">SSB</option>
                   <option value="MP_Police">MP Police</option>
                 
                </select>
              </div>
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label>Father serving cerificate /Discharge Book :</label>
                <input type="file" class="form-control cap" value="{{old('ser_certificate')}}" name="ser_certificate">
              
              </div>
            </div>
          </div>
        
         
       
        <div class="col-md-12">
           <button class="  btn btn-primary" type="submit" style="width: 100%; margin-bottom: 20px;" >Preview</button>           
         
        </div> 
        
     
        </section>
        <!-- Step 4 -->
        
                </div>
              </div>
            </div>
          </div>
        </section>
      </form>
        </div>
        <!-- /.box-body -->
      </div>
@endsection