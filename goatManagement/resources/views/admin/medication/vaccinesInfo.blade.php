@extends("admin.sidePanel")

@section("mainContain")
	<h2>Vaccines Informations</h2>
	<table class="table">
	    <thead>
	      <tr>
	        <th>Goat ID</th>
	        <th>Last Vaccines Date</th>
	        <th>Vaccines Name</th>
	        <th>Next Vaccines Date</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
	    		/*Data from vaccines table*/
	    		$goatVaccines = DB::table('vaccines')->where("action", 1)->get();
	    	?>

	      	@foreach( $goatVaccines as $vaccines)
	    	
	    	<tr>
		        <td>{{ $vaccines->goatId }}</td>
		        <td>{{ $vaccines->lastVaccinesDate }}</td>
		        <td>{{ $vaccines->vaccinesName }}</td>
		        <td style="color:red;">{{ $vaccines->nextVaccinesDate }}</td>
		     </tr>
	      @endforeach
	    </tbody>
	  </table>
@endsection