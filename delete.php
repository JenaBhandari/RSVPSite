<?php


	// Check to make sure 'person_id' is provided.
	if ( !isset($_GET['person_id']) || trim($_GET['person_id']) == '' ) {
		// Missing 'person_id;
		$error = "Invalid URL.";
	} else {
		// Valid URL w/ 'person_id'

		$host = "303.itpwebdev.com";
	$user = "jbhandar_host";
	$pass = "Villagers123";
	$db = "jbhandar_party_db";

		// Establish MySQL Connection.
		$mysqli = new mysqli($host, $user, $pass, $db);

		// Check for any Connection Errors.
		if ( $mysqli->connect_errno ) {
			echo $mysqli->connect_error;
			exit();
		}

		$sql = "DELETE FROM party_list
						WHERE person_id = " . $_GET['person_id'] . ";";



		$results = $mysqli->query($sql);

		if (!$results) {
			echo $mysqli->error;
			$mysqli->close();
			exit();
		}

		$mysqli->close();



	}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Shows if the person was successfully deleted from the database. They should not appear in search anymore.">
	<title>M1 Final Front Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="shared.css">
	<style>
		/*
		#993B58 -> magenta
		#FDE8E9 -> misty rose light pink
		#E3BAC6 -> fairy tail pink
		#36558F -> darker blue
		#3F88C5 -> lighter blue
		#7B2424 -> wine red

		*/

		h1 {
            font-size: 2em;
            color: #E3BAC6;
			padding-bottom: 20px;
			text-align:center;
			vertical-align: top;
			text-shadow: 0px 0px 50px #ecf3ff;
            text-decoration: underline #36558F;
			padding-top: 0px;
			margin-top: 0px;
		}
		h2 {
			color: #993B58;
			text-align: center;
			font-size: 3em;
		}


		#header {
			/* background-image: url(img/confetti.jpg); */
			background: rgb(54,85,143);
			background: linear-gradient(0deg, rgba(54,85,143,1) 0%, rgba(63,136,197,1) 100%);
			height: 210px;
			vertical-align: text-top;
			background-size: cover;
			background-position: center;
			
		}

		#header-info{
			margin: 0px;
            font-size: 1em;
            color: #FDE8E9;
			text-align: center;
		}

		#footerimg{
			width: auto;
			text-align: center;
			display: block;
			object-fit: cover;
			margin: 0 auto;
			width: 120%; /* increase the width to ensure coverage of the container */
			object-fit: cover;
			object-position: center 10%; 
			height: 100%;
		}

		#footer-container{
			overflow: hidden;
			text-align: center;
			padding-top: 300px;
		}


	</style>


  </head>
  <body>


		<div  id="header">

            <div id="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#main">RSVP</a></li>
                    <li><a href="playlist.html">Playlist</a></li>
                    <li><a href="summary.html">Inspo</a></li>
                </ul>
            </div> <!-- #navbar -->
			
			<div class="row">
				
				<h1>Fruit Punch Fridays</h1>
				<div id="header-info">
					<p>August 18th ~ 9pm-1am</p>
					<p>The Village</p>
					
				</div>

			</div>
			

		</div> <!-- #header -->
	
	<div class="container-fluid" id="wrapper">
		<div class = "row no-gutters">
			<div class = "col-12 border border-dark" id = "main">

			<div class="container">
				<div class="row">
					<h2 class="col-12 mt-4">Delete a Guest</h2>
				</div> <!-- .row -->
			</div> <!-- .container -->

			<div class="container">
				<div class="row mt-4">
					<div class="col-12">

					<?php if( isset($error) && trim($error) != '' ): ?>

						<div class="text-danger">
							<!-- Show Error Messages Here. -->
							<?php echo $error; ?>
						</div>

					<?php else: ?>

						<div class="text-success"><span class="font-italic"><?php echo $_GET['name']; ?></span> was successfully deleted.</div>

					<?php endif; ?>
					</div> <!-- .col -->
				</div> <!-- .row -->
				<div class="row mt-4 mb-4">
					<div class="col-12">
						<a href="home.php#main" role="button" class="btn btn-primary">Back to Search</a>
					</div> <!-- .col -->
				</div> <!-- .row -->
			</div> <!-- .container -->
         

				<div id="footer">
					.
				</div> <!-- #header -->

			</div>

			
			  
		</div>
	</div>


		
	<div id="footer-container">
					<img id="footerimg" src="img/newfooter.png" alt="footer">
	</div> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<!-- Popper and Bootstrap JS Below -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>