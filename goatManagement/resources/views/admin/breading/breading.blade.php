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

		<h1>Breeding Information</h1>

		{!! Form::open(["url"=>"/save", "method"=>"POST", "class"=>"form-horizontal"]) !!}

		  	<div class="form-group">
				<div class ="col-sm-4">
					<label for="breenName" class="control-label">Doe ID:</label>
					<select id="doeId" name="doeId" class="form-control">
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

				<div class ="col-sm-4">
					<label for ="gender" class ="control-label">Buck ID:</label>
					<select id="buckId" name="buckId" class="form-control">
						<option> </option>
					 <!-- Get the Buck ID number from database -->
						<?php
	                	$buck = DB::table("buck_infos")
	                    ->get();
	                    foreach( $buck as $id){?>
						
						<option>{{ $id->buckId }}</option>

						<?php
	                    }
	                    ?>
					</select>
				</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-6">
				<label for ="heatDate" class ="control-label">Date of Heat:</label>
				<input type ="date" class ="form-control" name ="heatDate" id ="heatDate"/>
			</div>
			<div class ="col-sm-6">
				<label for ="breedingDate" class ="control-label">Date of Breeding:</label>
				<input type ="date" class ="form-control" name="breedingDate" id ="breedingDate" onchange="cal()"/>
			</div>
		  </div>
		  <?php
		  	function dates(Request $request){
		  		$data = $request->input("breedingDate");
		  		
				$date_plus_10_days = strtotime("$my_date +10 days");}
		  	?>
		  <div class="form-group">
			<div class="col-sm-4">
				<label for ="birthDate" class ="control-label">Delevary Date (probable) :</label>
				<input type="text" class ="form-control" name="delevaryDateFrom" id ="probableDateFrom"/>
			
			</div>

			<div class ="col-sm-4">
				<label for ="collectionDate" class ="control-label" style="color:red;">To : + 65(days)</label>
				<input type="text" class ="form-control" name="delevaryDateTo" id="probableDateTo">
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
	<!--  Days added to the probable breeding field -->
	<script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("breedingDate").value);
				
				var someDate = new Date(dropdt);
                var numberOfDaysToAdd = 60; // add 55 days
				someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
				var dd = someDate.getDate();
				var mm = someDate.getMonth() + 1;
				var y = someDate.getFullYear();
				var someFormattedDate = mm +'/'+ dd +'/'+y;
				return someFormattedDate;
        }
		
		function GetDay(){
                var dropdt = new Date(document.getElementById("breedingDate").value);
				
				var someDate = new Date(dropdt);
                var numberOfDaysToAdd = 65; // add 65 days
				someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
				var dd = someDate.getDate();
				var mm = someDate.getMonth() + 1;
				var y = someDate.getFullYear();
				var someFormattedDate = mm +'/'+ dd +'/'+y;
				return someFormattedDate;
        }
		
        function cal(){
			if(document.getElementById("breedingDate")){
				document.getElementById("probableDateFrom").value=GetDays();
				document.getElementById("probableDateTo").value=GetDay();
			}  
		}
	


    </script>
	
@endsection