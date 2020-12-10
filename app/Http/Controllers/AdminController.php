<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\btechbsf;
use DB;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function allstudents(){

        $datas=btechbsf::all();

        return view('admin.allstudents', compact('datas'));
    }

public function roomallot(){

        return view('admin.roomallot');
    }

    public function attendance(){

        return view('admin.roomattend');
    }

    public function roomattendance(){

        $room=101;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.roomattendance', compact('datas'));
    }

     public function editattendance(){

        $room=101;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.editattendance', compact('datas'));
    }

    public function updateattendance(Request $request){

        $room=101;

        $datas= btechbsf::all()->where('roomno',$room);

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }

      return view('admin.roomattendance', compact('datas'));

    }

     public function roomattendance102(){

        $room=102;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.roomattendance102', compact('datas'));
    }

     public function editattendance102(){

        $room=102;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.editattendance102', compact('datas'));
    }

    public function updateattendance102(Request $request){

        $room=102;

        $datas= btechbsf::all()->where('roomno',$room);

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }

      return view('admin.roomattendance102', compact('datas'));

    }

     public function roomattendance103(){

        $room=103;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.roomattendance103', compact('datas'));
    }

    public function editattendance103(){

        $room=103;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.editattendance103', compact('datas'));
    }

    public function updateattendance103(Request $request){

        $room=103;

        $datas= btechbsf::all()->where('roomno',$room);

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }

      return view('admin.roomattendance103', compact('datas'));

    }

     public function roomattendance104(){

        $room=104;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.roomattendance104', compact('datas'));
    }

     public function editattendance104(){

        $room=104;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.editattendance104', compact('datas'));
    }

    public function updateattendance104(Request $request){

        $room=104;

        $datas= btechbsf::all()->where('roomno',$room);

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }

      return view('admin.roomattendance104', compact('datas'));

    }

     public function roomattendance105(){

        $room=105;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.roomattendance105', compact('datas'));
    }

     public function editattendance105(){

        $room=105;

        $datas= btechbsf::all()->where('roomno',$room);
        // dd($datas);

        return view('admin.editattendance105', compact('datas'));
    }

    public function updateattendance105(Request $request){

        $room=105;

        $datas= btechbsf::all()->where('roomno',$room);

        foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update(['attendance' => $request->attendance[$id]]);
      }

      return view('admin.roomattendance105', compact('datas'));

    }

    public function viewpresent(){
        
        return view('admin.viewpresent');
    }

    public function viewpresentstudent(){
        
        $att="Present";
        $room=101;
         // $datas= btechbsf::all();

       
        //$datas=DB::table('btechbsfs')->where('attendance',$att);
         //dd($datas);
        $datas=btechbsf::all()->where('attendance',$att)->where('roomno', $room);
        // dd($datas);
        return view('admin.viewpresentstudent', compact('datas'));
    }

    public function viewpresentstudent102(){
        
        $att="Present";
        $room=102;
         // $datas= btechbsf::all();

       
        //$datas=DB::table('btechbsfs')->where('attendance',$att);
         //dd($datas);
        $datas=btechbsf::all()->where('attendance',$att)->where('roomno', $room);
        // dd($datas);
        return view('admin.viewpresentstudent102', compact('datas'));
    }

    public function viewpresentstudent103(){
        
        $att="Present";
        $room=103;
         // $datas= btechbsf::all();

       
        //$datas=DB::table('btechbsfs')->where('attendance',$att);
         //dd($datas);
        $datas=btechbsf::all()->where('attendance',$att)->where('roomno', $room);
        // dd($datas);
        return view('admin.viewpresentstudent103', compact('datas'));
    }

    public function viewpresentstudent104(){
        
        $att="Present";
        $room=104;
         // $datas= btechbsf::all();

       
        //$datas=DB::table('btechbsfs')->where('attendance',$att);
         //dd($datas);
        $datas=btechbsf::all()->where('attendance',$att)->where('roomno', $room);
        // dd($datas);
        return view('admin.viewpresentstudent104', compact('datas'));
    }

    public function viewpresentstudent105(){
        
        $att="Present";
        $room=105;
         // $datas= btechbsf::all();

       
        //$datas=DB::table('btechbsfs')->where('attendance',$att);
         //dd($datas);
        $datas=btechbsf::all()->where('attendance',$att)->where('roomno', $room);
        // dd($datas);
        return view('admin.viewpresentstudent105', compact('datas'));
    }

    public function verifydocument(){

        return view('admin.documentverify');

    }

    public function documentverification(){

        $att="Present";
        $room=101;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.documentverification', compact('datas'));

    }

      public function editdocument(){
        $att="Present";
        $room=101;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.editdocumentverification', compact('datas'));
    }

    public function updatedocumentverification(Request $request){
         $att="Present";
        $room=101;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
         foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);

    }
    return view('admin.documentverification', compact('datas'));

}

    public function documentverification102(){

        $att="Present";
        $room=102;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.documentverification102', compact('datas'));

    }

      public function editdocument102(){
        $att="Present";
        $room=102;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.editdocumentverification102', compact('datas'));
    }

    public function updatedocumentverification102(Request $request){
         $att="Present";
        $room=102;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
         foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
    }
        return view('admin.documentverification102', compact('datas'));

    
}

    public function documentverification103(){

        $att="Present";
        $room=103;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.documentverification103', compact('datas'));

    }

    public function editdocument103(){
        $att="Present";
        $room=103;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.editdocumentverification103', compact('datas'));
    }

    public function updatedocumentverification103(Request $request){
         $att="Present";
        $room=103;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
         foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
    }
        return view('admin.documentverification103', compact('datas'));

    
}

    public function documentverification104(){

        $att="Present";
        $room=104;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.documentverification104', compact('datas'));

    }

      public function editdocument104(){
        $att="Present";
        $room=104;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.editdocumentverification104', compact('datas'));
    }

    public function updatedocumentverification104(Request $request){
         $att="Present";
        $room=104;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
         foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
    }
        return view('admin.documentverification104', compact('datas'));

    
}

    public function documentverification105(){

        $att="Present";
        $room=105;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.documentverification105', compact('datas'));

    }

      public function editdocument105(){
        $att="Present";
        $room=105;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.editdocumentverification105', compact('datas'));
    }

    public function updatedocumentverification105(Request $request){
         $att="Present";
        $room=105;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
         foreach($request->user_id as $id){
        DB::table('btechbsfs')->where('rollno',$id)->update([
          'tenth_doc_present' => $request->tenth_doc_present[$id],
          'twe_doc_present' => $request->twe_doc_present[$id],
          'migration_present' => $request->migration_present[$id],
          'service_present' => $request->service_present[$id],

      ]);
    }
        return view('admin.documentverification105', compact('datas'));

    
}

     public function generatemerit(){

        return view('admin.generatemerit');
    }

    public function generatemeritbsf(){

        $bsf='bsf';
        $data1= btechbsf::orderBy('jee_rank', 'asc')->where('orga',$bsf)->get();
       

        return view('admin.generatemeritbsf', compact('data1'));
    }

    public function generatemeritcapfs(){

        $bsf='capfs';
        $data1= btechbsf::orderBy('jee_rank', 'asc')->where('orga',$bsf)->get();
       

        return view('admin.generatemeritcapfs', compact('data1'));
    }

    public function branchallotment(){

      return view('admin.branchallotment');
    }


    public function branchallotment101(){

       $bsf='bsf';
       
      $cse='CSE';
      $it='IT';
      $me='ME';
      $au='AU';
      $ee='EE';
      $ec='EC';
      $countcse= btechbsf::all()->where('orga', $bsf)->where('branch',$cse)->count('id');
      $countit= btechbsf::all()->where('orga', $bsf)->where('branch',$it)->count('id');
      $countme= btechbsf::all()->where('orga', $bsf)->where('branch',$me)->count('id');
      $countau= btechbsf::all()->where('orga', $bsf)->where('branch',$au)->count('id');
      $countee= btechbsf::all()->where('orga', $bsf)->where('branch',$ee)->count('id');
      $countec= btechbsf::all()->where('orga', $bsf)->where('branch',$ec)->count('id');


      $capfs='capfs';
      $countccse= btechbsf::all()->where('orga', $capfs)->where('branch',$cse)->count('id');
      $countcit= btechbsf::all()->where('orga', $capfs)->where('branch',$it)->count('id');
      $countcme= btechbsf::all()->where('orga', $capfs)->where('branch',$me)->count('id');
      $countcau= btechbsf::all()->where('orga', $capfs)->where('branch',$au)->count('id');
      $countcee= btechbsf::all()->where('orga', $capfs)->where('branch',$ee)->count('id');
      $countcec= btechbsf::all()->where('orga', $capfs)->where('branch',$ec)->count('id');

      //dd($count);

       $att="Present";
        $room=101;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.branchallotment101', compact('datas','countcse', 'countit', 'countme', 'countau', 'countee', 'countec','countcec', 'countcee', 'countcau', 'countcme', 'countcit', 'countccse'));
    }

     public function branchallotment102(){

       $att="Present";
        $room=102;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.branchallotment102', compact('datas'));
    }

     public function branchallotment103(){

       $att="Present";
        $room=103;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.branchallotment103', compact('datas'));
    }

  

     public function branchallotment104(){

       $att="Present";
        $room=104;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.branchallotment104', compact('datas'));
    }
    
     public function branchallotment105(){

       $att="Present";
        $room=105;
        $datas=btechbsf::all()->where('attendance', $att)->where('roomno', $room);
        return view('admin.branchallotment105', compact('datas'));
    }
    

    public function seatsallotment(){

      return view('admin.seatsalloted');
    }

    public function bsfseats(){
      $bsf='bsf';
      $cse='IT';
      $count= btechbsf::all()->where('orga', $bsf)->where('branch',$cse)->count('id');
      dd($count);
      return view('admin.bsfseats');
    }

    public function capfsseats(){
      return view('admin.capfsseats');
    }
}
