
<?php
	// Check to make sure name is provided.
	if ( !isset($_GET['person_id']) || trim($_GET['person_id']) == '' ) {
		// Missing name;

		$error = "Invalid URL.";
	} else {

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
	
		// Retrieve all rsvp options from the DB.
		$sql_rsvp = "SELECT * FROM rsvps;";
	
		$results_rsvp = $mysqli->query( $sql_rsvp );
	
		// Check for SQL Errors.
		if ( !$results_rsvp ) {
			echo $mysqli->error;
			$mysqli->close();
			exit();
		}
	
		// Retrieve all item options from the DB.
		$sql_item = "SELECT * FROM items;";
	
		$results_item = $mysqli->query( $sql_item);
	
		// Check for SQL Errors.
		if ( !$results_item) {
			echo $mysqli->error;
			$mysqli->close();
			exit();
		}
	
		$person_id = $_GET['person_id'];
	

			$sql = "SELECT * 
							FROM party_list
							WHERE person_id = $person_id;";
		
			$results = $mysqli->query($sql);
	
			if (!$results) {
				echo $mysqli->error;
				$mysqli->close();
				exit();
			}
	
			$row_person = $results->fetch_assoc();
	
	
		// Close MySQL Connection.
		$mysqli->close();

	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This form allows the user to edit the data of a person on the invite list. Can change RSVP, amount of plus ones, and what they are bringing.">
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
			padding-top:50px;
			padding-top:110px;
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
			<div class = "col-12 " id = "main">

				<div class="container">

					<h2>Edit RSVP</h2>

					<?php if ( isset($error) && trim($error) != '' ) : ?> 

						<div class="col-12 text-danger font-italic">
							<?php echo $error; ?>
						</div>

					<?php else : ?>


					<form action="edit_confirmation.php" method="POST">

						<input type="hidden" name="person_id" value="<?php echo $row_person['person_id']; ?>">

						<div class="form-group row">
							<label for="name_id" class="col-sm-3 col-form-label text-sm-right">
								Name: <span class="text-danger">*</span>
							</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name_id" name="name" value="<?php echo $row_person['name']; ?>">
							</div>
						</div> <!-- .form-group -->

						<div class="form-group row">
							<label for="plus_one-id" class="col-sm-3 col-form-label text-sm-right">Plus One:</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" id="plus_one_id" name="plus_one" value="<?php echo $row_person['plus_one']; ?>">
								
							</div>
							
						</div> <!-- .form-group -->

						<div class="form-group row">
							<label for="rsvp-id" class="col-sm-3 col-form-label text-sm-right">
								RSVP:
							</label>
							<div class="col-sm-9">
								<select name="rsvp" id="rsvp-id" class="form-control">
									<option value="" selected>-- Select One --</option>

									<?php while( $row = $results_rsvp->fetch_assoc() ): ?>

									<?php if ( $row['rsvp_id'] == $row_person['rsvp_id'] ) : ?>

										<option value="<?php echo $row['rsvp_id']; ?>" selected>
											<?php echo $row['rsvp']; ?>
										</option>

									<?php else: ?>

										<option value="<?php echo $row['rsvp_id']; ?>">
											<?php echo $row['rsvp']; ?>
										</option>

									<?php endif; ?>

									<?php endwhile; ?>

								</select>
							</div>
						</div> <!-- .form-group -->

						<div class="form-group row">
							<label for="item-id" class="col-sm-3 col-form-label text-sm-right">Item:</label>
							<div class="col-sm-9">
								<select name="item" id="item-id" class="form-control">
									<option value="" selected>-- Select One --</option>

									<?php while( $row = $results_item->fetch_assoc() ): ?>

									<?php if ( $row['item_id'] == $row_person['item_id'] ) : ?>

										<option value="<?php echo $row['item_id']; ?>" selected>
											<?php echo $row['item']; ?>
										</option>

									<?php else: ?>

										<option value="<?php echo $row['item_id']; ?>">
											<?php echo $row['item']; ?>
										</option>

									<?php endif; ?>

									<?php endwhile; ?>

								</select>
							</div>
						</div> <!-- .form-group -->

					

						<div class="form-group row">
							<div class="ml-auto col-sm-9">
								<span class="text-danger font-italic">* Required</span>
							</div>
						</div> <!-- .form-group -->

						<div class="form-group row">
							<div class="col-sm-3"></div>
							<div class="col-sm-9 mt-2">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-light">Reset</button>
							</div>
						</div> <!-- .form-group -->

					</form>

					<?php endif; ?>


				</div> <!-- .container -->



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