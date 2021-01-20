<!DOCTYPE html>
<html lang="uk">
<head>
	<title>Leaflet Map &middot; Manta Ray Media</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css" />
	<link rel="stylesheet" href="css/map.css" />

	<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
	<script src="node_modules/jquery/dist/jquery.js" defer></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js" defer></script>
	<script src="node_modules/leaflet/dist/leaflet.js" defer></script>
	<script src="js/map.js" defer></script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-8">
			<div id="leafletMap"></div>
		</div>
		<div class="col-4">
			<table class="table table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Lat</th>
					<th scope="col">Lng</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry the Bird</td>
					<td>@twitter</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- TODO look at this cause the native bootstrap dropdown doesn't work -->
<div class="dropdown">
	<a class="menu"  href="#" role="button" id="actionMenu" aria-expanded="false">
		<span class="hamburger-line"></span>
		<span class="hamburger-line"></span>
		<span class="hamburger-line"></span>
	</a>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuLink">
		<li><a class="dropdown-item" href="#">Action</a></li>
		<li><a class="dropdown-item" href="#">Another action</a></li>
		<li><a class="dropdown-item" href="#">Something else here</a></li>
	</ul>
</div>


</body>
</html>
