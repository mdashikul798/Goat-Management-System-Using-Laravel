@extends("admin.sidePanel")

@section("mainContain")
	<table class="table">
	    <thead>
	      <tr>
	        <th>Buck ID</th>
	        <th>Breed Name</th>
	        <th>Collection Date</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
	    		$buckInfo = DB::table("buck_infos")->get();
	    	?>
	    	@foreach( $buckInfo as $data )
	      <tr>
	        <td>{{ $data->buckId }}</td>
	        <td>{{ $data->breedName }}</td>
	        <td>{{ $data->collectionDate }}</td>
	        <td></td>
	        
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
@endsection