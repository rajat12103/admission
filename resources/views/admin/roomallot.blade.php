@extends('admin.home')

@section("content")


<div class="col-lg-12 mx-auto">
                    <center><h3>Room Allotment</h3></center>
                    <br>
                    <div class="card">
                <div class="card-body card-block">
                    <form class="form-stacked" action="{{url('/roomallot_store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                 <div class="form-group">
                    <label for="category" class=" form-control-label">Select Category</label>
                    <br>
                    <select name="category" style="width: 100%; height: 40px">
                        <option value="bsf">BSF</option>
                        <option value="capfs">CPO</option>
                    </select>
                </div>
                
                 <div class="form-group">
                    <label for="roll_from" class=" form-control-label">JEE Rank From</label>
                    <input type="text" id="jee_rank_from" name="jee_rank_from" placeholder="Enter starting JEE Rank" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="roll_to" class=" form-control-label">JEE Rank Upto</label>
                    <input type="text" id="jee_rank_to" name="jee_rank_to" placeholder="Enter ending JEE Rank" class="form-control">
                </div>
                                           
                                                
                 <div class="form-group">
                    <label for="roomno" class=" form-control-label">Room No</label>
                    <br>
                    <select name="roomno" style="width: 100%; height: 40px">
                        <option value="101">101</option>
                        <option value="102">102</option>
                    </select>
                </div>
                                                    
                                                   
               
                <div class="form-group">
                <button type="submit" class="btn btn-success btn-flat" style="width: 100%;">Allot Room</button>
                       
                </div>
            </form>
                                                    </div>
                                                </div>
                                            </div></div>

            </div>
@endsection