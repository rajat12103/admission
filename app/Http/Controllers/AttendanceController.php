<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AttendanceController extends Controller
{
    public function addattendance(Request $request){
    	$date=$request->att_date;
    	$att_date=DB::table('attendances')->where('att_date',$date)->first();
    	if($att_date){
    		$notification=array(
    			'message'=>"Attendance already taken",
    			'alert-type'=>"error"
    		);
    		return redirect()->back()->with($notification);
    	}
    	else{
    		foreach($request->user_id as $id){
    			$data[]=[
    				"rollno"=>$id,
    				"attendance"=>$request->attendance[$id],
    				"att_date"=>$request->att_date,
    				"att_year"=>$request->att_year,
    				"month"=>$request->month,
    				"edit_date"=>date("d_m_y")
    			];
    			
    		}
    		$att=DB::table('attendances')->insert($data);
    		if($att){
    			DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
    		$notification=array(
    			'message'=>"attendance added successfully",
    			'alert-type'=>"success"
    		);
    		return redirect()->back()->with($notification);
    	}
    	else{
    		$notification=array(
    			'message'=>"error",
    			'alert-type'=>"success"
    		);
    		return redirect()->back()->with($notification);
    		}
    	}
    }
}
