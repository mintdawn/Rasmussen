
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lucky Cat Noodle Company</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/index.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka One">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

 <body>
<!-- main container for site -->
  <div class="container-fluid text-center" id="wrapper">

<!-- Jumbotron -->
	<div class="row">
		<div class="container-fluid p-4 text-center head">
			<a href="index.html" style="text-decoration: none;"><h1 class="title">Lucky Cat Noodle Company</h1></a>
		</div>
	</div>

<!-- top navbar -->
	<div class="row">
		<nav class="navbar navbar-expand-md sticky-top navbar-light" id="topbar">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon "></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	
		<div class="navbar-nav">
			<a class="nav-item nav-link" href="index.html"><i class="fa fa-home icons"></i> Home</a>
			<a class="nav-item nav-link active" href="noodle.php"><i class='fas fa-database icons'></i> Noodle Database</a>
			<a class="nav-item nav-link" href="page2.html"><i class="fa fa-info-circle"></i> Noodle Facts</a>
			<a class="nav-item nav-link" href="page3.html"><i class='fab fa-youtube'></i> How to Eat</a>
		</div>
		</div>
		</nav>
	</div>

   <div class="container-fluid">
     <h3 class="text-light">Ramen Noodle Database</h3>
    </div>

	<div class="container-fluid datainfo">
		<div class="row">
	<?php
	//Allow Headers 
	header('Access-Control-Allow-Origin: *');
	//$servername = "localhost:3306"; 
	$servername = "localhost:3306";
	$username = "noodleview"; 
	$password = "test"; 
	$dbname = "noodleworks";
	// Create connection 
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection 
	 if ($conn->connect_error) 
		 echo "Error: Unexpected connection error. Please retry the operation."; 
	 else 
	  { 
		 $result = $conn->query("SELECT * FROM noodles");
		 if (($result != 0) && ($result->num_rows > 0)) 
		   { 
			  while($row = $result->fetch_assoc()) {
			  $id = $row['id']; 
			  $name = $row['name']; 
			  $type = $row['type']; 
			  $desc = $row['description'];
			  echo '<div class="col-lg-6 col-md-12">';
			  echo '<div class="card result text-left m-2 p-2">'; 
			  echo '<h4 class="text-capitalize">'.$id.'.     '.$name.'</h4>'; 
			  echo '<p>Type:  '.$type.'</p>'; 
			  echo '<p>'.$desc.'</p></div></div>';
			  }		  
		   } 
		 $conn->close(); 
	}
	?>
		</div>
	</div>

<!-- footer -->
	<div class="row">
		<div class="col-sm-12 col-lg-12 footer">
			<p class="text-light float-left">noodle.php</p>
			<p class="text-light float-right">Dawn Summerall - 2018</p>
		</div>
    </div>

  </div>
  <script src="scripts/index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>