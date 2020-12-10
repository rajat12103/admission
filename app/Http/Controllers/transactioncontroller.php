<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\btechbsf;
use App\transaction;
use Auth;
use DB;

class transactioncontroller extends Controller
{
    public function storebsf(Request $request){

    	$obj=new Transaction;
         $obj->txn_id=$request->txn_id;
         $obj->txn_date=$request->txn_date;
         $obj->txn_time=$request->txn_time;
         $obj->price = $request->price;
         $obj->user_id = Auth::id();
        $is_saved = $obj->save();

        if($is_saved){
        	$num_padded = sprintf('%04s',$obj->id);
            $bsf='bsf';
            $cpa='capfs';

     		DB::table('transactions')->where('id',$obj->id)->update(['rollno' => "0902BSF".$num_padded]);

     		DB::table('btechbsfs')->where('userid',Auth::user()->id)->where('orga',$bsf)->update(['rollno' => "0902BSF".$num_padded]);

            DB::table('btechbsfs')->where('userid',Auth::user()->id)->where('orga',$cpa)->update(['rollno' => "0902CAP".$num_padded]);

            DB::table('users')->where('id',Auth::user()->id)->update(['rollno' => "0902BSF".$num_padded]);



      
        }
    }
}
