const map = L.map('leafletMap', {
	center: [51.536099, -0.085110],
	zoom: 18
});

//we must display openstreetmap credits according to their TOS
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

document.querySelector('#actionMenu').onclick = function(e) {
	console.log('e', e);
	document.querySelector('#actionMenu ~ .dropdown-menu').classList.toggle('show');
}


fetch('/', {
	method: 'POST'
}).then(response => response.json().then(json => console.log(json)));
