<?php

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

	// Close MySQL Connection.
	$mysqli->close();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Home page of the party RSVP website. Shows date of event, allows user to rsvp through CRUD functionality, and explains the event.">
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

	
		#imgs{
			display: flex;
		}


		#footerimg{

  			width: auto;
			display: block; 

			  width: 120%; /* increase the width to ensure coverage of the container */
			object-fit: cover;
			object-position: center 10%; 
			
			height: 100%;
		}

		#footer-container{

  			overflow: hidden;
			/* text-align: center; */
			padding-top:50px;
		}

		.rsvp{
			background-color: #FDE8E9;

		}

		.logo{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 30%;
            border: 2px solid #491c2b;
			object-fit: cover;
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

				<div id="arrow">
					<p>v</p>
				</div>
				
			</div>
			

		</div> <!-- #header -->
	
	<div class="container-fluid" id="wrapper">
		<div class = "row no-gutters">
			<div class = "col-12 " id = "main">


				<div class="container rsvp mt-4">
					<div class="row">
						<h2 class="col-12 mt-4 mb-4">RSVP NOW!!</h2>
					</div> <!-- .row -->
				</div> <!-- .container -->
				<div class="container mb-4 rsvp pb-4">
					<form action="search_results.php" method="GET">
						<div class="form-group row">
							<h3 class="col-sm-3 col-form-label text-sm-right">
								<label for="person-id" >Name:</label>
							</h3>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="person-id" name="name">
							</div>
						</div> <!-- .form-group -->
						
						<div class="form-group row">
							<div class="col-sm-3"></div>
							<div class="col-sm-9 mt-2">
								<button type="submit" class="btn btn-primary">Search</button>
								<button type="reset" class="btn btn-light">Reset</button>

								<a href="add_form.php" class="btn btn-primary" role="button">Add a Guest</a>

							</div>
						</div> <!-- .form-group -->
					</form>
				</div> <!-- .container -->


				<div class="container" id="expect">


				<div class = "container pt-3 text-center">

					<h2>What is Fruit Punch Friday?</h2>

					<p>Fruit Punch Friday is the highlight of the week for me and my friends. It's a weekly event where we all come together to catch up, unwind, and have a great time. We usually start with some delicious food, followed by playing games, watching a movie, and of course, sipping on some refreshing fruit punch. It's a fantastic way to spend time with each other, and we always look forward to it. I encourage all my friends to mark it on their calendars and be excited to join us. Please do RSVP so that we know if you'll be coming, if you're bringing a plus one, and if you can contribute to the party. We can't wait to see you all there!<p>

					<h3>Dress Code:</h3>

					<p>Wear anything you want!</p>

					<h3>Want to help?</h3>

					<p>You can sign up to bring items like cups, snacks, etc!</p>
				</div>

				<h2>Expect:</h2>

				<div class="container" id="imgs">

					<img class="logo" src="img/friends.jpeg" alt="Get Together">

					<img class="logo" src="img/cards.jpeg" alt="Game Night">

					<img class="logo" src="img/boards.jpeg" alt="Board Night">


				</div>


				</div>
		
			</div>

		</div>
	</div>


	<div id="footer-container">
					<img id="footerimg" src="img/newfooter.png" alt="footer">
	</div> 



<script>		
$(".image-container>img").each(function(i, img) {
    $(img).css({
        position: "relative",
        left: ($(img).parent().width() - $(img).width()) / 2 
    });
});

</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<!-- Popper and Bootstrap JS Below -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>