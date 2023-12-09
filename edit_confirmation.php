<?php
	// Check to see if any required fields are missing.


	if ( !isset($_POST['name']) || trim($_POST['name'] ) == '')
		{
		// One or more of the required fields is empty.
		$error = "Please fill out all required fields.";
	} else {
		// All required fields provided. Continue with the ADD workflow.

		$host = "303.itpwebdev.com";
		$user = "jbhandar_host";
		$pass = "Villagers123";
		$db = "jbhandar_party_db";

		// DB Connection.
		$mysqli = new mysqli($host, $user, $pass, $db);
		if ( $mysqli->connect_errno ) {
			echo $mysqli->connect_error;
			exit();
		}

		$name = $_POST['name'];

		// $plus_one = 1 OR null
		if ( isset($_POST['plus_one']) && trim($_POST['plus_one']) != '' ) {
			$plus_one = $_POST['plus_one'];
		} else {
			$plus_one = "null";
		}

		if ( isset($_POST['rsvp']) && trim($_POST['rsvp']) != '' ) {
			$rsvp_id = $_POST['rsvp'] ; 
		} else {
			$rsvp_id = "null";
		}

		if ( isset($_POST['item']) && trim($_POST['item']) != '' ) {
			// $item = 'USER INPUT'
			$item_id = $_POST['item'] ;
		} else {
			$item_id = "null";
		}



		$sql = "UPDATE party_list
						SET
							name = '$name',
							plus_one = $plus_one,
							rsvp_id = $rsvp_id,
							item_id = $item_id
						WHERE person_id = " . $_POST['person_id'] . ";";

		// echo "<hr>$sql<hr>";

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
	<meta name="description" content="Shows if the person's data was successfully edited. This means it was updated in the database.">
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
			padding-top:330px;
		}


	</style>


  </head>
  <body>


		<div  id="header">
				<?php include "nav.php"; ?>
			
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
			<div class = "col-12" id = "main">

				<div class="container">
					<div class="row">
						<h2 class="col-12 mt-4">Edit RSVP</h2>
					</div> <!-- .row -->
				</div> <!-- .container -->

				<div class="container">
					<div class="row mt-4">
							<div class="col-12">

							<?php if ( isset($error) && trim($error) != '' ) : ?>

								<div class="text-danger">
									<?php echo $error; ?>
								</div>

								<?php else: ?>
								

								<div class="text-success"><span class="font-italic"><?php echo $name; ?></span> was successfully edited.</div>
								
								<?php endif; ?>

							</div> <!-- .col -->
						</div> <!-- .row -->
					<div class="row mt-4 mb-4">
						<div class="col-12">
							<a href="details.php?person_id=<?php echo $_POST['person_id']; ?>" role="button" class="btn btn-primary">Back to Details</a>
						</div> <!-- .col -->
					</div> <!-- .row -->
				</div> <!-- .container -->

			<div>

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