<table id="carTable" class="table-auto">
	<thead>
		<tr>
			<th>Car Name</th>
			<th>
				<span class="flex">
					<span class="pr-4">Price</span>
					<form action="sort.php" method="GET">
						<input type="hidden" name="sortBy" value="price">
						<input type="hidden" name="order" value="asc">
						<button type="submit" title="sort by ascending">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
							</svg>

						</button>
					</form>
					<form action="sort.php" method="GET">
						<input type="hidden" name="sortBy" value="price">
						<input type="hidden" name="order" value="dsc">
						<button type="submit" title="sort by descending">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18" />
							</svg>



						</button>
					</form>
					<a href="/" title="reset sort">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
						</svg>

					</a>
				</span>
			</th>

			<th>Discount</th>
			<th>Availability</th>
			<th>
				<span class="flex space-between">
					<span class="pr-4">Color</span>

					<button onclick="sortByColor('asc')" class="btn" title="sort by ascending">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
						</svg>
					</button>


					<button onclick="sortByColor('dsc')" class="btn" title="sort by descending">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18" />
						</svg>
					</button>

					<a href="/" title="reset">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
						</svg>

					</a>
				</span>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php
		// check if $data is set and not is an array
		if (isset($data) && is_array($data)) {
			foreach ($data as $car) {
				echo '<tr>';
				echo '<td>' . $car['car_name'] ?? "NA" . '</td>';
				echo '<td>' . $car['price'] ?? "NA" . '</td>';
				echo '<td>' . $car['discount'] ?? "NA" . '</td>';
				echo '<td>' . $car['availability'] ?? "NA" . '</td>';
				echo '<td>' . $car['color'] ?? "NA" . '</td>';
				echo '</tr>';
			}
		}
		?>
	</tbody>
</table>