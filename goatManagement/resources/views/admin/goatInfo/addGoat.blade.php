@extends("admin.sidePanel")

@section("mainContain")
	
		<!-- Show the empty field and success message -->
		<p class="alert-success"> {{ Session::get("msg") }} </p>
		<!-- Error message -->
		

		<h1>Add Goats</h1>
		{!! Form::open(['url' => '/save-goat', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

		  	<div class="form-group">
				<div class="col-sm-4">
					<label for="goatId" class="control-label">Goat ID:</label>
					<input type="text" class="form-control" name="goatId" id="goatId" placeholder="Goat ID"/>
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

				<div class ="col-sm-4">
					<label for ="goatType" class ="control-label">Goat Type:</label>
					<select class="form-control" name="goatType" id="goatType">
						<option> </option>
						<option>Buckling</option>
						<option>Buck</option>
						<option>Castrated</option>
						<option>Doe</option>
						<option>Kid</option>
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
				<input type ="text" class ="form-control" name ="collectionAddress" id ="collectionAddress" placeholder="Enter collection Address"/>

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
		  <!-- Hidden value for action field -->

		  <button type="submit" class="btn btn-success">Submit</button>



		{!! Form::close() !!}
		<div class="form-group">
		   <label>Back to the <a href="{{ URL::to('/admin') }}">Dashboark..</a></label>
		 </div>
		 @include("admin.error.error")
@endsection