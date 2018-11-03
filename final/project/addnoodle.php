<!DOCTYPE html>
<html>
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
		<div class="container-fluid text-center head">
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
			<a class="nav-item nav-link" href="noodle.php"><i class='fas fa-database icons'></i> Noodle Database</a>
			<a class="nav-item nav-link active" href="addnoodle.php"><i class="fa fa-edit"></i> Add a Noodle</a>
			<a class="nav-item nav-link" href="page2.html"><i class="fa fa-info-circle"></i> Noodle Facts</a>
			<a class="nav-item nav-link" href="page3.html"><i class='fab fa-youtube'></i> How to Eat</a>
		</div>
		</div>
		</nav>
	</div>
           
	<!-- Add a Noodle Form -->
    <div class="container-fluid col-lg-12 text-left formwrapper p-2 m-1 mx-auto">
		<form action="" method="POST">
		  <div class="form-group">
			<label for="name">Name Your Noodle.</label>
			<input type="text" class="form-control" name="noodlename" placeholder="Add a Noodle">
			<small id="namehelp" class="form-text text-muted">Add a new Asian noodle to the database.</small>
		  </div>
		  <div class="form-group">
			<label for="type">What Type of Noodle?</label>
			<input type="text" class="form-control" name="noodletype" placeholder="Wheat? Rice? Etc...">
			<small id="typehelp" class="form-text text-muted">What category would this noodle fall under? What is the noodle made from?</small>
		  </div>
		  <div class="form-group">
			<label for="description">Describe the noodle. What is it like? Where is it from? What dishes is it used in? 500 characters or less.</label>
			<textarea class="form-control" name="noodledescription" rows="4"></textarea>
		  </div>  
		  <button type="submit" class="btn btn-primary noodlebtn">Add the Noodle</button>
		</form>
    </div>
	
<!-- Php for form handling to database -->
	
<?php
	if (! empty( $_POST )) {
	// Create connection
	$mysqli = new mysqli('localhost:3306', 'noodleview', 'test', 'noodleworks');
	// Check connection
	if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
	}

	$sql = "INSERT INTO noodles (name, type, description) 
	VALUES ( '{$mysqli->real_escape_string($_POST['noodlename'])}',
	'{$mysqli->real_escape_string($_POST['noodletype'])}',
	'{$mysqli->real_escape_string($_POST['noodledescription'])}')";
	$insert = $mysqli->query($sql);
	
	if ( $insert ) {
		echo "Success! Row ID: {$mysqli->insert_id}";
		} else {
			die("Error: {$mysqli->errno} : {$mysqli->error}");
		}

	$mysqli->close();
	}
?>
	
<footer class="page-footer">
	<div class="row">
		<div class="container-fluid footer">
			<p class="text-center">addnoodle.php</p>
		</div>
	</div>
</footer>   
	
  </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  </body>
  </html>