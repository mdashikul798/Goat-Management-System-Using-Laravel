@extends("admin.sidePanel")

@section("mainContain")
	<h2>All Pregnant Mother</h2>
	<table class="table">
	    <thead>
	      <tr>
	        <th>Buck ID</th>
	        <th>Mother ID</th>
	        <th>Breeding Date</th>
	        <th>Delevary Date From</th>
	        <th>Delevary Date To</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
	    	/*Data from breadings table*/
	    	$breedingInfo = DB::table('breadings')
            	->get();

	    		$goatInfo = DB::table("goat_infos")->where("action", 1)->get();
	    		/*$deathInfo = DB::table("death_infos")->get();*/
	    	?>
	    	@foreach( $breedingInfo as $breeding)
	    	
	    	<tr>
		        <td>{{ $breeding->buckId }}</td>
		        <td>{{ $breeding->doeId }}</td>
		        <td>{{ $breeding->breedingDate }}</td>
		        <td style="color:red;">{{ $breeding->delevaryDateFrom }}</td>
		        <td style="color:red;">{{ $breeding->delevaryDateTo }}</td>
		     </tr>
	      @endforeach

	    </tbody>
	  </table>
@endsection