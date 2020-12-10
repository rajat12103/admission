@extends('layouts.master')

@section("content")

	<div class="card">
		<div class="card-header">
			<center><h2>Transaction</h2></center>
			
		</div>
		<div class="card-body"><form action="{{ url('/transaction')}}" method="post">
        {{ csrf_field()}}

        <!-- <input type="hidden" name="_token" content="{{ csrf_token() }}"> -->

         <div class="form-group">
                            <label>Transaction ID</label>
                            <input id="txn_id" type="text" class="form-control" name="txn_id" value="{{ old('txn_id') }}" required autofocus>

                             
                        </div>
                        <div class="form-group">
                            <label>Transaction Date</label>
                            <input id="txn_date" type="date" class="form-control" name="txn_date" value="{{ old('txn_date') }}" required autofocus>

                             
                        </div>
                        <div class="form-group">
                            <label>Transaction Time</label>
                            <input id="txn_time" type="text" class="form-control" name="txn_time" value="{{ old('txn_time') }}" required autofocus>

                             
                        </div>
                        <div class="form-group">
                            <label>Fees</label>
                            <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required autofocus>

                             
                        </div>

        
    
            <div class="col-sm-4 col-md-12" style="justify-content: center;">
            <center>
                <button type="submit" class="btn btn-success btn-lg" name="submit">Submit</button>    
            </center>
            <br>
        </div>

        </div>
       

       
    </form></div>
    
</div>

@endsection