<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
<table class="table table-bordered table-dark" style="">
  <thead>
    <tr>
      <th scope="col" colspan="4" style="text-align: center;">APPLICATION FORM</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">FULLNAME</th>
      <td>{{strtoupper($obj->fullname)}}</td>
      <th>REGISTRATION NUMBER</th>
      <td>{{strtoupper($obj->regno)}}</td>
    </tr>
    <tr>
      <th scope="row">EMAIL</th>
      <td>{{strtoupper($obj->email)}}</td>
      <tH>MOBILE NUMBER</th>
      <td>{{strtoupper($obj->phone)}}</td>
    </tr>
    <tr>
      <th scope="row">GENDER</th>
      <td >{{strtoupper($obj->gender)}}</td>
      <th>D.O.B</th>
      <td>{{strtoupper($obj->dob)}}</td>
    </tr>
    <tr>
      <th scope="row">FATHER NAME</th>
      <td>{{strtoupper($obj->father_name)}}</td>
      <th>MOTHER NAME</th>
      <td>{{strtoupper($obj->mother_name)}}</td>
    </tr>
    <tr>
      <th scope="row">FATHER EMAIL</th>
      <td>{{strtoupper($obj->father_email)}}</td>
      <tH>FATHER CONTACT</th>
      <td>{{strtoupper($obj->father_mob)}}</td>
    </tr>
    <tr>
      <th scope="row">GENDER</th>
      <td >{{strtoupper($obj->gender)}}</td>
      <th>D.O.B</th>
      <td>{{strtoupper($obj->dob)}}</td>
    </tr>
    <tr>
      <th scope="row">AADHAR NUMBER</th>
      <td>{{strtoupper($obj->aadhar)}}</td>
      <th>IDENTIFICATION MARK</th>
      <td>{{strtoupper($obj->identification)}}</td>
    </tr>
    <tr>
      <th scope="row" colspan="4" style="text-align: center;">COMMUNICATION ADDRESS</th>
    </tr>
    <tr>
      <th scope="row">HOUSE NUMBER</th>
      <td >{{strtoupper($obj->house)}}</td>
      <th>LANDMARK</th>
      <td>{{strtoupper($obj->landmark)}}</td>
    </tr>
    <tr>
      <th scope="row">STREET</th>
      <td>{{strtoupper($obj->street)}}</td>
      <th>CITY</th>
      <td>{{strtoupper($obj->city)}}</td>
    </tr>
    <tr>
      <th scope="row">STATE</th>
      <td>{{strtoupper($obj->state)}}</td>
      <tH>PINCODE</th>
      <td>{{strtoupper($obj->pincode)}}</td>
    </tr>
    <tr>
      <th scope="row" colspan="4" style="text-align: center;">PERMANENT ADDRESS</th>
    </tr>
    <tr>
      <th scope="row">HOUSE NUMBER</th>
      <td >{{strtoupper($obj->house1)}}</td>
      <th>LANDMARK</th>
      <td>{{strtoupper($obj->landmark1)}}</td>
    </tr>
    <tr>
      <th scope="row">STREET</th>
      <td>{{strtoupper($obj->street1)}}</td>
      <th>CITY</th>
      <td>{{strtoupper($obj->city1)}}</td>
    </tr>
    <tr>
      <th scope="row">STATE</th>
      <td>{{strtoupper($obj->state1)}}</td>
      <tH>PINCODE</th>
      <td>{{strtoupper($obj->pincode1)}}</td>
    </tr>
    <tr>
      <th scope="row" colspan="4" style="text-align: center;">10TH DETAILS</th>
    </tr>
    <tr>
      <th scope="row">SCHOOL</th>
      <td>{{strtoupper($obj->te_school)}}</td>
      <tH>BOARD</th>
      <td>{{strtoupper($obj->te_board)}}</td>
    </tr>
    <tr>
      <th scope="row">SUBJECT</th>
      <td >{{strtoupper($obj->te_subject)}}</td>
      <th>ROLLNO</th>
      <td>{{strtoupper($obj->te_rollno)}}</td>
    </tr>
    <tr>
      <th scope="row">SYSTEM TYPE</th>
      <td>{{strtoupper($obj->te_system)}}</td>
      <th>YEAR OF PASSING</th>
      <td>{{strtoupper($obj->te_passing)}}</td>
    </tr>
    <tr>
      <th scope="row">PERCENTAGE</th>
      <td>{{strtoupper($obj->te_percentage)}}</td>
      <tH>CGPA</th>
      <td>{{strtoupper($obj->te_cgpa)}}</td>
    </tr>
    <tr>
      <th scope="row" colspan="4" style="text-align: center;">12TH DETAILS</th>
    </tr>
    <tr>
      <th scope="row">SCHOOL</th>
      <td>{{strtoupper($obj->tw_school)}}</td>
      <tH>BOARD</th>
      <td>{{strtoupper($obj->tw_board)}}</td>
    </tr>
    <tr>
      <th scope="row">RESULT</th>
      <td >{{strtoupper($obj->tw_result)}}</td>
      <th>ROLLNO</th>
      <td>{{strtoupper($obj->tw_rollno)}}</td>
    </tr>
    <tr>
      <th scope="row">SYSTEM TYPE</th>
      <td>{{strtoupper($obj->tw_system)}}</td>
      <th>YEAR OF PASSING</th>
      <td>{{strtoupper($obj->tw_passing)}}</td>
    </tr>
    <tr>
      <th scope="row">PERCENTAGE</th>
      <td>{{strtoupper($obj->tw_percentage)}}</td>
      <tH>CGPA</th>
      <td>{{strtoupper($obj->tw_cgpa)}}</td>
    </tr>
    <tr>
      <th scope="row">JEE MAIN ROLL NO.</th>
      <td >{{strtoupper($obj->jee_roll_no)}}</td>
      <th>JEE PERCENTILE</th>
      <td>{{strtoupper($obj->jee_perc)}}</td>
    </tr>
    <tr>
      <th scope="row" colspan="2">AIR RANK</th>
      <td colspan="2">{{strtoupper($obj->jee_rank)}}</td>
      
    </tr>
    <tr>
      <th scope="row" colspan="4" style="text-align: center;">OTHER DETAILS</th>
      
    </tr>
    <tr>
      <th scope="row">NATIONALITY</th>
      <td >{{strtoupper($obj->nationality)}}</td>
      <th>RELIGION</th>
      <td>{{strtoupper($obj->religion)}}</td>
    </tr>
    <tr>
      <th scope="row">CATEGORY</th>
      <td>{{strtoupper($obj->category)}}</td>
      <th>OTHER RELIGION</th>
      <td>{{strtoupper($obj->otherrel)}}</td>
    </tr>
    <tr>
      <th scope="row" >IS PHYSICALLY HANDICAPPED(PWD)?</th>
      <td>{{strtoupper($obj->phy_hand)}}</td>
      <tH>IS RESIDENT OF J&K?</th>
      <td>{{strtoupper($obj->jkresident)}}</td>
    </tr>
    <tr>
      <th scope="row" colspan="2">PWD DETAILS</th>
      <td colspan="2">{{strtoupper($obj->pwd)}}</td>
      
    </tr>
    <tr>
      <th scope="row" colspan="4" style="text-align: center;">PARENTS ORGANISATION DETAILS</th>
    </tr>
    <tr>
      <th scope="row">PARENTS ORGANISARION</th>
      <td>{{strtoupper($obj->orga)}}</td>
      <tH>RANK</th>
      <td>{{strtoupper($obj->bsf_rank)}}</td>
    </tr>
    <tr>
      <th scope="row">UNIT NAME</th>
      <td >{{strtoupper($obj->unit)}}</td>
      <th>UNIT ADDRESS</th>
      <td>{{strtoupper($obj->unitadd )}}</td>
    </tr>
    <tr>
      <th scope="row">FORCE IN CAPF</th>
      <td>{{strtoupper($obj->capf_org)}}</td>
      <th>ROLL NUMBER</th>
      <td>{{strtoupper($obj->rollno)}}</td>
    </tr>

    <tr>
      <th colspan="4" style="text-align: center;"><input type="button" name="PRINT" onclick="printDiv()" value="PRINT"><!-- <a href="" @click.prevent="printme" target="_blank" >Print</a> --></th>
    </tr>

    <script type="text/javascript">
      
    </script>
   
  </tbody>
</table>

</body>
</html>