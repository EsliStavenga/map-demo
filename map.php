<!DOCTYPE html>
<html lang="uk">
<head>
	<title>Leaflet Map &middot; Manta Ray Media</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css" />
	<link rel="stylesheet" href="css/map.css" />
	<link rel="stylesheet" href="css/menu.css" />

	<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js" defer></script>
	<script src="node_modules/leaflet/dist/leaflet.js" defer></script>
	<script src="js/map.js" defer></script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-lg-8">
			<div id="leafletMap"></div>
		</div>
		<div class="d-none d-lg-block col-lg-4 table-fixed-head">
			<table id="metadataTable" class="table table-striped">
				<thead>
				<tr>
					<th scope="col">Lat</th>
					<th scope="col">Lng</th>
					<th scope="col">Description</th>
				</tr>
				</thead>
				<tbody id="mapPoints">

				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="dropdown menu">
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuLink">
		<li><button id="loadInitialData" class="dropdown-item">Load data</button></li>
		<li><button id="loadAdditionalData" class="dropdown-item disabled" >Load more points</button></li>
	</ul>
	<a href="#" role="button" id="actionMenu" aria-expanded="false">
		<span class="hamburger-line"></span>
		<span class="hamburger-line"></span>
		<span class="hamburger-line"></span>
	</a>
</div>


</body>
</html>
