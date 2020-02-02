<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Demo3</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
  <style>
    body {
      margin: 0;
      padding :0;
    }
    .map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }
  </style>


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">LocDoc</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- /.navbar-collapse -->
			</div>
		</nav>


		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			
		<?php echo $_POST["name"];?>


<div id='map-popups' class='map'> </div>

			

		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Enter Data</h3>
				</div>
				<div class="panel-body">
					
					<form action="finalapp.php" method="POST" role="form">
						<legend>Hospital Info</legend>

<div class="form-group">
		<label for="">Hospital Name:</label>
		<input type="text" class="form-control" name="name" id="" placeholder="Name">
	</div>

	<div class="form-group">
		<label for="">Latitude: </label>
		<input type="text" class="form-control" name="latitude" id="" placeholder="Lat">
	</div>
	<div class="form-group">
		<label for="">Longitude:</label>
		<input type="text" class="form-control" name="longitude" id="" placeholder="Long">
	</div>
	<div class="form-group">
		<label for="">Description</label>
		<input type="text" class="form-control" name="description" id="" placeholder="Desc">
	</div>
	<div class="form-group">
		<label for="">Comments</label>
		<input type="text" class="form-control" name="comments" id="" placeholder="Comments">
	</div>

	<input type="submit" name="Submit" value="submit" class="btn btn-primary">

</form>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		<script>
L.mapbox.accessToken = 'pk.eyJ1IjoibWVldHAxMTk3IiwiYSI6ImNqNXpkeG43ZTA3cWIyd3BvanB1amJuMm0ifQ.5N-5DyWjWAPvOL3d0XEO9g';
var mapPopups = L.mapbox.map('map-popups', 'mapbox.light')
  .setView([37.8, -96], 4);
var myLayer = L.mapbox.featureLayer().addTo(mapPopups);

var geojson = [
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [<?php echo $longitude ?>, <?php echo $latitude ?>]
    },
    properties: {
      title: '<?php echo $name ?>',
      description: '<?php echo $description ?>',
      'marker-color': '#3bb2d0',
      'marker-size': 'large',
      'marker-symbol': 'rocket'
    }
  },
 
];
myLayer.setGeoJSON(geojson);
mapPopups.scrollWheelZoom.disable();
</script>

	</body>
</html>