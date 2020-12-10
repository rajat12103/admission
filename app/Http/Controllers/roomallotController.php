<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\btechbsf;
use App\roomallot;
use Auth;
use DB;

class roomallotController extends Controller
{
    //
    public function roomallot(){

        return view('admin.roomallot');
    }

    public function roomallot_store(Request $request){

    	$obj=new roomallot;
         $obj->category=$request->category;
         $obj->roll_from=$request->jee_rank_from;
         $obj->roll_to=$request->jee_rank_to;
         $obj->roomno = $request->roomno;
        $is_saved = $obj->save();

        if($is_saved){

     		DB::table('btechbsfs')->where('orga', $request->category)->whereBetween('jee_rank',[$request->jee_rank_from, $request->jee_rank_to])->update(['roomno' => $request->roomno ]);




      
        }
     return redirect()->back()->with('message','Room Alloted Successfully!');
        
        
    }


    public function roomattendance(){

    	return view('admin.roomattendance');
    }

    
}
