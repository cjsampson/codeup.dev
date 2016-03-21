
	<!-- Forms for Parks -->
		<div class="parksForm form-control" method="post">
			<label for="name">Name: </label>
			<input type="text" name="name" id="name" placeholder="Name of park">

			<label for="location" name="locations">Location: </label>
			<input type="text" name="location" placeholder="Location">

			<label for="date_established" name="date_established">Date Established: </label>
			<input type="date" id="date_established" class="datepicker" placeholder="YYYY-MM-DD">

			<label for="description" name="description">Description: </label>
			<textarea name="description" id="description" cols="50" rows="50"></textarea>

			<label for="area_in_acres" name="area_in_acres">Area in Acres: </label>
			<input type="text" name="area_in_acres" id="area_in_acres">
			
			<input type="file" name="images" id="images" value="imageOfPark">		
		</div> <!-- .parksForm -->




		<div class="navigationButtons">
			<?php if ($page == 1): ?>
				<a role="button" class="btn btn-default" href="?page=<?= $page + 1; ?>">Next Page</a>
			<?php elseif ($page == 2): ?>
				<a role="button" class="btn btn-default" href="?page=<?= $page - 1; ?>">Back Page</a>
				<a role="button" class="btn btn-default" href="?page=<?= $page + 1; ?>">Next Page</a>
			<?php else: ?>
				<a role="button" class="btn btn-default" href="?page=<?= $page - 1; ?>">Back</a>
			<?php endif; ?>
		</div>
	</div>