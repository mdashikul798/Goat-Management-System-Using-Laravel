@extends("admin.sidePanel")

@section("mainContain")
	<p class="alert-info">
			<?php
				$message = Session::get("msg");
				if($message){
					echo $message;
					Session::put("message", null);
				}
			?>
		</p>
		<!-- Show the empty field by alert message -->
		@include("admin.error.error")

		<h1>Kids Information</h1>
		{!! Form::open(['url' => '/save-kids', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

		  	<div class="form-group">
				<div class ="col-sm-4">
					<label for="goatId" class="control-label">Goat ID:</label>
					<input name="goatId" class="form-control" type="text" list="goatId"/>
					<datalist id="goatId">
					<!-- Get the Goat ID number from database -->
						<?php
	                	$goatId = DB::table("goat_infos")
	                    ->get();
	                    foreach( $goatId as $id){?>
						
						<option>{{ $id->goatId }}</option>

						<?php
	                    }
	                    ?>
					</datalist>
				</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-4">
				<label for ="rearingNumber" class ="control-label">Select for Rearing:</label>
				<select class="form-control" name="rearingNumber">
					<option> </option>
					<option>One</option>
					<option>Two</option>
					<option>Three</option>
					<option>Four</option>
					<option>Five</option>
				</select>
			</div>
			<div class ="col-sm-4">
				<label for ="saleNumber" class ="control-label">Select for Sale:</label>
				<select class="form-control" name="saleNumber">
					<option> </option>
					<option>One</option>
					<option>Two</option>
					<option>Three</option>
					<option>Four</option>
					<option>Five</option>
				</select>
			</div>
			<div class ="col-sm-4">
				<label for ="deathNumber" class ="control-label">Number of Death:</label>
				<select class="form-control" name="deathNumber">
					<option> </option>
					<option>One</option>
					<option>Two</option>
					<option>Three</option>
					<option>Four</option>
					<option>Five</option>
				</select>
			</div>
		  </div>
		  
		  <div class="form-group">
		    <label for="note">Note:</label>
			    <textarea type="text" class="form-control" rows="6" name="note"></textarea>
		  </div>

		  <button type="submit" class="btn btn-success">Submit</button>
		{!! Form::close() !!}
		<div class="form-group">
		   <label>Back to the <a href="{{ URL::to('/admin') }}">Dashboark..</a></label>
		 </div>
@endsection