@extends("admin.sidePanel")

@section("mainContain")
	<table class="table">
	    <thead>
	      <tr>
	        <th>Goat ID</th>
	        <th>Breed Name</th>
	        <th>Type</th>
	        <th>Birthday</th>
	        <th>Collection Date</th>
	        <th>Death</th>
	        <th>Death Cause</th>
	        
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
	    		$deathGoat = DB::table('death_infos')
            ->join('goat_infos', 'death_infos.goatId', '=', 'goat_infos.goatId')
            ->select('death_infos.*', 'goat_infos.breedName', 'goat_infos.goatType', 'goat_infos.birthDate', 'goat_infos.collectionDate')
            ->get();

	    		$goatInfo = DB::table("goat_infos")->where("action", 1)->get();
	    		/*$deathInfo = DB::table("death_infos")->get();*/
	    	?>
	    	@foreach( $goatInfo as $goatInfo)
	    	
	    	<tr>
		        <td>{{ $goatInfo->goatId }}</td>
		        <td>{{ $goatInfo->breedName }}</td>
		        <td>{{ $goatInfo->goatType }}</td>
		        <td>{{ $goatInfo->birthDate }}</td>
		        <td>{{ $goatInfo->collectionDate }}</td>
		     </tr>
	      @endforeach

	      @foreach( $deathGoat as $death)
	    	
	    	<tr class="alert-danger">
		        <td>{{ $death->goatId }}</td>
		        <td>{{ $death->breedName }}</td>
		        <td>{{ $death->goatType }}</td>
		        <td>{{ $death->birthDate }}</td>
		        <td>{{ $death->collectionDate }}</td>
		        <td>{{ $death->deathDate }}</td>
		        <td>{{ $death->deathCause }}</td>
		     </tr>
	      @endforeach

	    </tbody>
	  </table>
@endsection