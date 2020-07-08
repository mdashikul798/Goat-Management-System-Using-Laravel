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
		<h1>Pregnant Mother Information</h1>

		{!! Form::open(['url' => '/save-motherInfo', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

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
			<div class="col-sm-6">
				<label for ="deleveryDate" class ="control-label">Date of Delevery:</label>
				<input type ="date" class ="form-control" name ="deleveryDate" id ="deleveryDate"/>
			</div>
			<div class ="col-sm-6">
				<label for ="kidsNumber" class ="control-label">Total Number of Kids:</label>
				<input type ="text" class ="form-control" name ="kidsNumber" id ="kidsNumber" placeholder="Number of Kids" />
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-6">
				<label for ="totalMale" class ="control-label">Total Male:</label>
				<input type ="text" class ="form-control" name ="totalMale" id ="totalMale" placeholder="Total Male"/>
			</div>
			<div class="col-sm-6">
				<label for ="totalFemail" class ="control-label">Total Femail</label>
				<input type ="text" class ="form-control" name ="totalFemail" id ="totalFemail" placeholder="Total Femail"/>
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