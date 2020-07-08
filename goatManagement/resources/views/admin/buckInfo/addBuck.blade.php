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

		<h1>Add Buck</h1>
			{!! Form::open(['url' => '/save-buck', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

		  	<div class="form-group">
				<div class="col-sm-4">
					<label for="buckId" class="control-label">Buck ID:</label>
					<input type="text" class="form-control" name="buckId" id="buckId" placeholder="Buck ID"/>
				</div>
				<div class ="col-sm-4">
					<label for="breenName" class="control-label">Breed Name:</label>
					<select class="form-control" name="breedName" id="breedName">
						<option> </option>
						<option>Blackbangle</option>
						<option>Jamunapari</option>
						<option>BJ-20%</option>
						<option>BJ-50%</option>
						<option>BJ-90%</option>
						<option>BJ-100%</option>
					</select>
				</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-6">
				<label for ="birthDate" class ="control-label">Date of Birth:</label>
				<input type ="date" class ="form-control" name ="birthDate" id ="birthDate"/>
			</div>
			<div class ="col-sm-6">
				<label for ="collectionDate" class ="control-label">Date of Collection:</label>
				<input type ="date" class ="form-control" name ="collectionDate" id ="collectionDate"/>
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-8">
				<label for ="collectionAddress" class ="control-label">Collection Address:</label>
				<input type ="text" class ="form-control" name ="collectionAddress" id ="collectionAddress" placeholder="Enter Address"/>
			</div>
			<div class="col-sm-4">
				<label for ="collectionPhone" class ="control-label"></label>
				<input type ="text" class ="form-control" name ="collectionPhone" id ="collectionPhone" placeholder="Phone"/>
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