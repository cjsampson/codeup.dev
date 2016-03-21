<!-- Forms for Parks -->
	<div class="parksForm" method="post">
		<label for="name">Name: </label>
		<input type="text" name="name" id="name">

		<label for="location" name="locations">Location: </label>
		<input type="text" name="location">

		<label for="date_established" name="date_established">Date Established: </label>
		<input type="date" id="date_established" class="datepicker" placeholder="YYYY-MM-DD">

		<label for="description" name="description">Description: </label>
		<textarea name="description" id="description" cols="50" rows="50"></textarea>

		<label for="area_in_acres" name="area_in_acres">Area in Acres: </label>
		<input type="text" name="area_in_acres" id="area_in_acres">
		
		<label for="images">Upload Park Image</label>
		<input type="file" name="images" id="images">		
	</div> <!-- .parksForm -->




	<div class="navigationButtons">
		<?php if ($page == 1): ?>
			<a href="?page=<?= $page + 1; ?>">Next Page</a>
		<?php elseif ($page == 2): ?>
			<a href="?page=<?= $page - 1; ?>">Back</a>
			<a href="?page=<?= $page + 1; ?>">Next Page</a>
		<?php else: ?>
			<a href="?page=<?= $page - 1; ?>">Back</a>
		<?php endif; ?>
	</div>
</div>