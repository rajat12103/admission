<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\btechbsf;
use App\transaction;
use App\user;
use Auth;
use DB;

class btechbsfController extends Controller
{
    public function form(){
        $registered1=transaction::where('user_id',Auth::user()->id)->count();
        // print_r($registered1);
       $registered=btechbsf::where('userid',Auth::user()->id)->count();
       if($registered1>0){
          $obj= btechbsf::where('email', Auth::user()->email)->first();

         return view('admission.fullfilledform', compact('obj'));

       }elseif($registered>0){

       $obj=btechbsf::where('userid',Auth::user()->id)->first();

        return view('admission.previewbtechbsf',compact('obj'));
        
         
        

       }
       else{

                return view('admission.btechform');

       }

    }

    public function store(Request $request){
    	$file = $request->file('image');
   // dd($file);
   // exit;

   $filename = 'image' . time().'.'.$request->image->extension();
   // dd($filename);
  // exit;

   $file->move("upload/",$filename);
//dd($file);
//tenth marksheet
   $file1 = $request->file('te_marksheet');
     
   $filename1 = 'te_marksheet' . time().'.'.$request->te_marksheet->extension();
  
     $file1->move("upload/",$filename1);
   
//twelth marksheet

   $file2 = $request->file('tw_certificate');
     
   $filename2 = 'tw_certificate' . time().'.'.$request->tw_certificate->extension();

   $file2->move("upload/",$filename2);
//jee mains 

    $file3 = $request->file('jee_certificate');
   
     
   $filename3 = 'jee_certificate' . time().'.'.$request->jee_certificate->extension();

   $file3->move("upload/",$filename3);



//domicile


//     $file4 = $request->file('domicile');
//    // dd($file4);
//    // exit;
         
//    $filename4 = 'domicile' . time().'.'.$request->domicile->extension();
// // dd($filename4);
// // exit;
//    $file4->move("upload/",$filename4);


//ser_certificate


 $file5 = $request->file('ser_certificate');
   // dd($file5);
   // exit;
     
   $filename5 = 'ser_certificate' . time().'.'.$request->ser_certificate->extension();
// dd($filename5);
//  exit;
   $file5->move("upload/",$filename5);




    	$obj=new btechbsf;
     $obj->userid=$request->userid;
        
        
        $obj->fullname=$request->fullname;
        
        $obj->email=$request->email;
        $obj->phone=$request->phone;
        $obj->gender=$request->gender;
        $obj->dob=$request->dob;
        $obj->father_name=$request->father_name;
        $obj->mother_name=$request->mother_name;
        $obj->father_email=$request->father_email;
        $obj->father_mob=$request->father_mob;
        $obj->aadhar=$request->aadhar;
        $obj->identification=$request->identification;
        $obj->image = $filename;


        $obj->house=$request->house;
        $obj->street=$request->street;
        $obj->landmark=$request->landmark;
        $obj->city=$request->city;
        $obj->state=$request->state;
        $obj->pincode=$request->pincode;
         $obj->house1=$request->house1;
        $obj->street1=$request->street1;
        $obj->landmark1=$request->landmark1;
        $obj->city1=$request->city1;
        $obj->state1=$request->state1;
        $obj->pincode1=$request->pincode1;
       
        $obj->te_school=$request->te_school;
        $obj->te_board=$request->te_board;
        $obj->te_subject=$request->te_subject;
        $obj->te_passing=$request->te_passing;
        $obj->te_rollno=$request->te_rollno;
        $obj->te_system=$request->te_system; 
        $obj->te_percentage=$request->te_percentage;
        $obj->te_cgpa=$request->te_cgpa;
        $obj->te_marksheet=$filename1;

        $obj->tw_school=$request->tw_school;
        $obj->tw_board=$request->tw_board;
        $obj->tw_passing=$request->tw_passing;
        $obj->tw_system=$request->tw_system;
        $obj->tw_result=$request->tw_result;
        $obj->tw_percentage=$request->tw_percentage;
        $obj->tw_cgpa=$request->tw_cgpa;
        $obj->tw_rollno=$request->tw_rollno;
        $obj->tw_certificate=$filename2;


        $obj->eligibility=$request->eligibility;
        $obj->jee_roll_no=$request->jee_roll_no;
         $obj->jee_rank=$request->jee_rank;
          $obj->jee_perc=$request->jee_perc;
           $obj->jee_certificate=$filename3;

        $obj->nationality=$request->nationality;
        $obj->category=$request->category;
        $obj->religion=$request->religion;
        $obj->otherrel=$request->otherrel;
        $obj->phy_hand=$request->phy_hand;
        $obj->pwd=$request->pwd;
        $obj->domicile=$request->domicile;
        $obj->jkresident=$request->jkresident;
       
        $obj->orga=$request->orga;
         $obj->bsf_rank=$request->bsf_rank;
         $obj->unit=$request->unit;
         $obj->unitadd=$request->unitadd;
         $obj->capf_org=$request->capf_org;
         $obj->ser_certificate=$filename5;
         //$obj->price=$request->price;
          $obj->regno="0";
       

       $saved=$obj->save();

       if($saved){

        $num_padded = sprintf('%04s',$obj->id);

     DB::table('btechbsfs')
     ->where('id',$obj->id)
     ->update(['regno' => "RJ20BL".$num_padded]);
     
      return view('admission.previewbtechbsf',compact('obj'));   
         }


    }

    public function editFormDetails($id){

         $student= btechbsf::find($id);
        return view("admission/btechbsfeditformdetails",compact("student"));
    }

    public function updateDetails(Request $request){
        $file = $request->file('image');

   // dd($file);
   // exit;

   $filename = 'image' . time().'.'.$request->image->extension();
   // dd($filename);
  // exit;

   $file->move("upload/",$filename);
//dd($file);
//tenth marksheet
   $file1 = $request->file('te_marksheet');
     
   $filename1 = 'te_marksheet' . time().'.'.$request->te_marksheet->extension();
  
     $file1->move("upload/",$filename1);
   
//twelth marksheet

   $file2 = $request->file('tw_certificate');
     
   $filename2 = 'tw_certificate' . time().'.'.$request->tw_certificate->extension();

   $file2->move("upload/",$filename2);
//jee mains 

    $file3 = $request->file('jee_certificate');
   
     
   $filename3 = 'jee_certificate' . time().'.'.$request->jee_certificate->extension();

   $file3->move("upload/",$filename3);



//domicile


//     $file4 = $request->file('domicile');
//    // dd($file4);
//    // exit;
         
//    $filename4 = 'domicile' . time().'.'.$request->domicile->extension();
// // dd($filename4);
// // exit;
//    $file4->move("upload/",$filename4);


//ser_certificate


 $file5 = $request->file('ser_certificate');
   // dd($file5);
   // exit;
     
   $filename5 = 'ser_certificate' . time().'.'.$request->ser_certificate->extension();
// dd($filename5);
//  exit;
   $file5->move("upload/",$filename5);
        $obj= btechbsf::find($request->id);

        $obj->fullname=$request->fullname;
        $obj->email=$request->email;
        $obj->phone=$request->phone;

        $obj->gender=$request->gender;
        $obj->dob=$request->dob;
        $obj->father_name=$request->father_name;
        $obj->mother_name=$request->mother_name;
        $obj->father_email=$request->father_email;
        $obj->father_mob=$request->father_mob;
        $obj->aadhar=$request->aadhar;
        $obj->identification=$request->identification;
       $obj->image = $filename;


        $obj->house=$request->house;
        $obj->street=$request->street;
        $obj->landmark=$request->landmark;
        $obj->city=$request->city;
        $obj->state=$request->state;
        $obj->pincode=$request->pincode;
         $obj->house1=$request->house1;
        $obj->street1=$request->street1;
        $obj->landmark1=$request->landmark1;
        $obj->city1=$request->city1;
        $obj->state1=$request->state1;
        $obj->pincode1=$request->pincode1;
       
        $obj->te_school=$request->te_school;
        $obj->te_board=$request->te_board;
        $obj->te_subject=$request->te_subject;
        $obj->te_passing=$request->te_passing;
        $obj->te_rollno=$request->te_rollno;
        $obj->te_system=$request->te_system; 
        $obj->te_percentage=$request->te_percentage;
        $obj->te_cgpa=$request->te_cgpa;
       $obj->te_marksheet=$filename1;

        $obj->tw_school=$request->tw_school;
        $obj->tw_board=$request->tw_board;
        $obj->tw_passing=$request->tw_passing;
        $obj->tw_system=$request->tw_system;
        $obj->tw_result=$request->tw_result;
        $obj->tw_percentage=$request->tw_percentage;
        $obj->tw_cgpa=$request->tw_cgpa;
        $obj->tw_rollno=$request->tw_rollno;
       $obj->tw_certificate=$filename2;


        $obj->eligibility=$request->eligibility;
        $obj->jee_roll_no=$request->jee_roll_no;
         $obj->jee_rank=$request->jee_rank;
          $obj->jee_perc=$request->jee_perc;
          $obj->jee_certificate=$filename3;

        $obj->nationality=$request->nationality;
        $obj->category=$request->category;
        $obj->religion=$request->religion;
        $obj->otherrel=$request->otherrel;
        $obj->phy_hand=$request->phy_hand;
        $obj->pwd=$request->pwd;
       $obj->domicile=$request->domicile;
        $obj->jkresident=$request->jkresident;
       
        $obj->orga=$request->orga;
         $obj->bsf_rank=$request->bsf_rank;
         $obj->unit=$request->unit;
         $obj->unitadd=$request->unitadd;
         $obj->capf_org=$request->capf_org;
        $obj->ser_certificate=$filename5;
         
        $updated = $obj->save();
        if($updated){
         return view('admission.previewbtechbsf',compact('obj'));

         // echo "success";
        }
    }

    //submitting

    public function submitFormDetails($id){

        $student= btechbsf::find($id);
        return view("admission/transactionbtechbsf", compact('student'));

    }








    //for view profile button

    public function profile(){
    	 $student = User::where('id',Auth::user()->id)->first();
    	 return view('admission.profilebtechstudent', compact('student'));
    }

     public function editProfile($id)
    {
        $student= user::find($id);
        return view("admission/editbsfprofile",compact("student"));
        
    }

    public function updateProfile(Request $request){
    	$student= user::find($request->id);
        // dd($student);
        // exit;

        $student->fullname=$request->fullname;
        /*dd($student);
        exit;*/
        $student->email=$request->email;
        $student->mobile=$request->mobile;


        $updated = $student->save();
        /*dd($updated);
        exit;*/

        if($updated){
        	return view('admission.profilebtechstudent',compact('student'));
           // echo "success";
        }
    }

    //printing form

    public function printForm($id){

      $obj= btechbsf::find($id);
       return view("admission/printform", compact('obj'));
    }


    public function addattendance(Request $request){

      // $data=$request->all();
      //echo "<pre>"; print_r($data); die;

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }
      return redirect()->back()->with('message','Attendance Added Successfully!');
    }

      public function addattendance102(Request $request){

      // $data=$request->all();
      //echo "<pre>"; print_r($data); die;

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }
       return redirect()->back()->with('message','Attendance Added Successfully!');
    }

      public function addattendance103(Request $request){

      // $data=$request->all();
      //echo "<pre>"; print_r($data); die;

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }
       return redirect()->back()->with('message','Attendance Added Successfully!');
    }

      

      public function addattendance104(Request $request){

      // $data=$request->all();
      //echo "<pre>"; print_r($data); die;

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }
       return redirect()->back()->with('message','Attendance Added Successfully!');
    }

      public function addattendance105(Request $request){

      // $data=$request->all();
      //echo "<pre>"; print_r($data); die;

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }
      
        return redirect()->back()->with('message','Attendance Added Successfully!');
    }

    public function adddocumentverification(Request $request){

       foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
      }
      
        return redirect()->back()->with('message','Document Added Successfully!');

    }

    public function adddocumentverification102(Request $request){

       foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
      }
      
        return redirect()->back()->with('message','Document Added Successfully!');

    }

    public function adddocumentverification103(Request $request){

       foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
      }
      
        return redirect()->back()->with('message','Document Added Successfully!');

    }

    public function adddocumentverification104(Request $request){

       foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
      }
      
        return redirect()->back()->with('message','Document Added Successfully!');

    }

    public function adddocumentverification105(Request $request){

       foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
      }
      
        return redirect()->back()->with('message','Document Added Successfully!');

    }

   public function studentprint($id){
     $obj= btechbsf::find($id);
       return view("admission/printform", compact('obj'));

   }

    public function allotbranch101(Request $request){

      foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['branch' => $request->branch[$id]]);}

        return redirect()->back()->with('message','Branch Alloted Successfully!');

    }

     public function allotbranch102(Request $request){

      foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['branch' => $request->branch[$id]]);}

        return redirect()->back()->with('message','Branch Alloted Successfully!');

    }


     public function allotbranch103(Request $request){

      foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['branch' => $request->branch[$id]]);}

        return redirect()->back()->with('message','Branch Alloted Successfully!');

    }

     public function allotbranch104(Request $request){

      foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['branch' => $request->branch[$id]]);}

        return redirect()->back()->with('message','Branch Alloted Successfully!');

    }

     public function allotbranch105(Request $request){

      foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['branch' => $request->branch[$id]]);}

        return redirect()->back()->with('message','Branch Alloted Successfully!');

    }
}



