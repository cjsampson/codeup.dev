<div class="nationalParks">
		<?php foreach ($nationalParks as $nationalPark): ?>
			<div class="nationalPark">
				<h4><?= Input::escape($nationalPark['name']); ?></h4>
				<img src="<?= Input::escape($nationalPark['images']);?> " alt="<?= $nationalPark['name'];?>">
				<ul class="parkUL">
					<li>Name: <?= Input::escape($nationalPark['name']); ?></li>
					<li>Location: <?= Input::escape($nationalPark['location']); ?></li>
					<li>Date-Established: <?= Input::escape($nationalPark['date_established']); ?></li>
					<li>Description: <?= Input::escape($nationalPark['description']); ?></li>
					<li>Area in Acres: <?= Input::escape($nationalPark['area_in_acres']); ?></li>
				</ul>			
		<?php endforeach; ?>
</div> <!-- .nationalParksLoop -->