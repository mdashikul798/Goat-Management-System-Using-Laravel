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

		<h1>Death Information</h1>

		{!! Form::open(["method"=>"POST", "class"=>"form-horizontal", "url"=>"/saveDeath"]) !!}

		  	<div class="form-group">
				<div class ="col-sm-4">
					<label for="goatId" class="control-label">Goat ID:</label>
					<select  id="goatId" name="goatId" class="form-control">
						<option> </option>
					<!-- Get the Goat ID number from database -->
						<?php
	                	$goatId = DB::table("goat_infos")
	                    ->get();

	                    foreach( $goatId as $id){?>
						
						<option>{{ $id->goatId }}</option>

						<?php
	                    }
	                    ?>
					</select>
				</div>
				<div class ="col-sm-6">
					<label for ="deathDate" class ="control-label">Date of Death:</label>
					<input name="deathDate" class="form-control" type="date"/>
				</div>
		  </div>

		  <div class="form-group">
			<div class="col">
				<label for ="deathCause" class ="control-label">Causes of Death:</label>
				<input name="deathCause" class="form-control" type="text"/>
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