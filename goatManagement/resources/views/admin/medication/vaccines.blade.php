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

		<h1>Vaccines Information</h1>

		{!! Form::open(["url"=>"/save-vaccines", "method"=>"POST", "class"=>"form-horizontal"]) !!}
		  	<div class="form-group">
				<div class ="col-sm-3">
					<label for="goatId" class="control-label">Goat ID:</label>
					<select id="goatId" name="goatId" class="form-control">
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

				<div class ="col-sm-3">
					<label for="goatId" class="control-label">Buck ID:</label>
					<select id="goatId" name="goatId" class="form-control">
						<option> </option>
					<!-- Get the Goat ID number from database -->
						<?php
	                	$goatId = DB::table("buck_infos")
	                    ->get();
	                    foreach( $goatId as $id){?>
						
						<option>{{ $id->buckId }}</option>

						<?php
	                    }
	                    ?>
					</select>
				</div>

				<div class ="col-sm-6">
				<label for ="vaccinesName" class ="control-label">Vaccines Name:</label>
				
				<select id="vaccinesName" name="vaccinesName" class="form-control">
					<option> </option>
					<option value="Anthrax">Anthrax</option>
					<option value="Haemorrhagic Septicemia">Haemorrhagic Septicemia</option>
					<option value="Enterotoxaemia">Enterotoxaemia</option>
					<option value="Black Quarter">Black Quarter</option>
					<option value="Foot & mouth disease (F.M.D.)">Foot & mouth disease (F.M.D.)</option>
					<option value="Goat Pox">Goat Pox</option>
					<option value="C.C.P.P">C.C.P.P</option>
					<option value="P.P.R">P.P.R</option>
				</select>
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-6">
				<label for ="lastVaccinesDate" class ="control-label">Last Vaccines Date:</label>
				<input name="lastVaccinesDate" class="form-control" type="date" id="lastVaccinesDate" onchange="cal()"/>
			</div>
			<div class="col-sm-6">
				<label for ="nextVaccinesDate" class ="control-label">Next Vaccines Date:</label>
				<input name="nextVaccinesDate" class="form-control" type="text" id="nextVaccinesDate"/>
			</div>
		  </div>
		  
		  <div class="form-group">
		    <label for="note">Note:</label>
			    <textarea type="text" class="form-control" rows="6" name="note">null</textarea>
		  </div>

		  <button type="submit" class="btn btn-success">Submit</button>
		{!! Form::close() !!}
		<div class="form-group">
		   <label>Back to the <a href="{{ URL::to('/admin') }}">Dashboark..</a></label>
		 </div>

		 <!-- Auto creating Next vaccine date  -->
		   <script type="text/javascript">
				function Anthrax(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 30; // add 30 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
				function HP(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 40; // add 40 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
		        function Enterotoxaemia(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 50; // add 50 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
		        function BQ(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 60; // add 60 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
		        function FMD(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 70; // add 70 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
		        function GP(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 80; // add 80 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
		        function CCPP(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 20; // add 20 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
		        function PPR(){
		                var dropdt = new Date(document.getElementById("lastVaccinesDate").value);
						
						var someDate = new Date(dropdt);
		                var numberOfDaysToAdd = 30; // add 30 days
						someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
						var dd = someDate.getDate();
						var mm = someDate.getMonth() + 1;
						var y = someDate.getFullYear();
						var someFormattedDate = mm +'-'+ dd +'-'+y;
						return someFormattedDate;
		        }
			    function cal(){
					if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "Anthrax")){
						document.getElementById("nextVaccinesDate").value=Anthrax();
					}
					else if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "Haemorrhagic Septicemia")){
						document.getElementById("nextVaccinesDate").value=HP();
					}
					else if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "Enterotoxaemia")){
						document.getElementById("nextVaccinesDate").value=Enterotoxaemia();
					}
					else if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "Black Quarter")){
						document.getElementById("nextVaccinesDate").value=BQ();
					}
					else if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "Foot & mouth disease (F.M.D.)")){
						document.getElementById("nextVaccinesDate").value=FMD();
					}
					else if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "Goat Pox")){
						document.getElementById("nextVaccinesDate").value=GP();
					}
					else if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "C.C.P.P")){
						document.getElementById("nextVaccinesDate").value=CCPP();
					}
					else if((document.getElementById("lastVaccinesDate")) && (document.getElementById("vaccinesName").value == "P.P.R")){
						document.getElementById("nextVaccinesDate").value=PPR();
					}
				}
		    </script>
@endsection