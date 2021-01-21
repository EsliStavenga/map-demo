const map = L.map('leafletMap', {
	center: [51.536099, -0.085110],
	zoom: 18,
	zoomAnimation: true
});
const polyline = L.polyline([], {color: 'green'}).addTo(map);

const metadataTableBody = document.querySelector('#mapPoints');

//we must display openstreetmap credits according to their TOS
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

//register click event listeners
document.querySelector('#actionMenu').onclick = toggleDropdownMenu;
document.querySelector('#loadInitialData').onclick = loadInitialData;
document.querySelector('#loadAdditionalData').onclick = loadAdditionalData;

function toggleDropdownMenu() {
	document.querySelector('.dropdown.menu .dropdown-menu').classList.toggle('show');
}

function loadInitialData(e) {
	loadAdditionalData();

	//toggle the buttons async
	e.target.classList.add('disabled');
	document.querySelector('#loadAdditionalData').classList.remove('disabled');
}

function loadAdditionalData() {
	getPOIs().then(data => {
		data.forEach(point => {
			polyline.addLatLng([point.lat, point.lng]);
		});

		postDataProcess(data);
	});
}

function addPointsToTable(data) {
	data.forEach(point => {
		const row = metadataTableBody.insertRow();

		for(const key of Object.keys(point)) {
			row.insertCell().appendChild(document.createTextNode(point[key]));
		}

		metadataTableBody.appendChild(row);
	})
}

function fitToBounds() {
	map.flyToBounds(polyline.getBounds(), {
		animate: true
	});
}

function postDataProcess(data) {
	addPointsToTable(data);
	fitToBounds();
}

/**
 * @return {Promise<{lat, lng, description}[]>} A promise which resolves into a parsed JSON response from the API
 */
function getPOIs() {

	//something like polyfill will take care of this
	return new Promise((resolve, reject) => {
		fetch('/', {
			method: 'POST'
		}).then(response => //get the JSON body parsed and ready to use
			response.json().then(json => resolve(json)).catch(e => reject(e))
		).catch(e => reject(e));
	});
}
