<div class="nationalParks">
		<?php foreach ($nationalParks as $nationalPark): ?>
			<div class="nationalPark col-md-6">
				<h4><?= Input::escape($nationalPark['name']); ?></h4>
				<img src="<?= Input::escape($nationalPark['images']);?> " alt="<?= $nationalPark['name'];?>" class="img-responsive col-md-6">
				<ul class="parkUL col-md-6">
					<li>Name: <?= Input::escape($nationalPark['name']); ?></li>
					<li>Location: <?= Input::escape($nationalPark['location']); ?></li>
					<li>Date-Established: <?= Input::escape($nationalPark['date_established']); ?></li>
					<li>Area in Acres: <?= Input::escape($nationalPark['area_in_acres']); ?></li>
				</ul>
				<p class="description col-md-12">Description: <?= Input::escape($nationalPark['description']); ?></p>
			</div>			
		<?php endforeach; ?>
</div> <!-- .nationalParksLoop -->