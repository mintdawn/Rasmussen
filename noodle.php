
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

 <body>
<!-- main container for site -->
  <div class="container-fluid text-center bg-warning" id="wrapper">

<!-- Jumbotron -->
	<div class="row">
		<div class="jumbotron text-center bg-dark text-warning">
			<h1><a class="text-warning" href="index.html" style="text-decoration: none;">Lucky Cat Noodle Company</a></h1>
		</div>
	</div>

<!-- top navbar -->
	<div class="row">
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" id="topbar">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<a class="navbar-brand" href="index.html"><img class="img-fluid float-left" id="logo" width="100" src="https://www.unicornpoint.net/img/luckycat.png"></a>
	
		<div class="navbar-nav">
			<a class="nav-item nav-link" href="index.html">Home</a>
			<a class="nav-item nav-link active" href="noodle.php">Noodle Database</a>
			<a class="nav-item nav-link" href="page2.html">Noodle Facts</a>
			<a class="nav-item nav-link" href="page3.html">How to Eat</a>
		</div>
		</div>
		</nav>
	</div>

   <div class="container-fluid">
     <h3>Ramen Noodle Database</h3>
    </div>

<div class="container datainfo bg-light">
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
          echo '<div class="card result text-left m-2 p-2">'; 
          echo '<h4 class="text-capitalize">'.$id.'.     '.$name.'</h4>'; 
          echo '<p>Type:  '.$type.'</p>'; 
          echo '<p>'.$desc.'</p></div>';
		  }		  
       } 
     $conn->close(); 
}
?>
</div>

<!-- footer -->
	<div class="row">
		<div class="col-sm-12 col-lg-12 bg-dark footer">
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