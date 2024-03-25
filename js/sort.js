function sortByColor(order) {
	fetch('cars.json')
		.then(response => response.json())
		.then(data => {
			data.sort((a, b) => {
				if (a.color < b.color) return order == "asc" ? -1 : 1;
				if (a.color > b.color) return order == "asc" ? 1 : -1;

				return 0;
			});

			const tableBody = document.querySelector('#carTable tbody');
			tableBody.innerHTML = '';
			data.forEach(car => {
				const row = document.createElement('tr');
				row.innerHTML = `
		<td>${car.car_name}</td>
		<td>${car.price}</td>
		<td>${car.discount}</td>
		<td>${car.availability}</td>
		<td>${car.color}</td>
	    `;
				tableBody.appendChild(row);
			});
		});
}

