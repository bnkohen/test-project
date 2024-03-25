window.onload = function () {
    fetch('cars.json')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('#carTable tbody');
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