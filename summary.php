<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Summary page of the final project assignment. Shows what the project is about and where some aspects come from.">
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

		#thefooter {
			background-color: #7B2424;
			color: #FFF;
			font-family: 'Nabla', cursive;
			text-align: center;
			height: 50px;
			line-height: 50px;
			font-size: 0.8em;
			
			margin-left: auto;
			margin-right: auto;
		}
		body {
			margin: 0px;
            background-color: #E3BAC6;
		}
		h1 {
			margin: 0px;
            font-size: 5em;
            color: #E3BAC6;
			padding-bottom: 20px;
			padding-top: 100px;
			text-align: center;
			text-shadow: 0px 0px 50px #ecf3ff;
            text-decoration: underline #36558F;
		}
		h2 {
			color: #993B58;
			text-align: center;
			font-size: 3em;
		}

        h3 {
			color: #7d3e52;
		}

		#header {
			/* background-image: url(img/confetti.jpg); */
			background: rgb(54,85,143);
			background: linear-gradient(0deg, rgba(54,85,143,1) 0%, rgba(63,136,197,1) 100%);
			height: 500px;
			
			background-size: cover;
			background-position: center;
			
		}

		#header-info{
			padding-top: 20px;
			margin: 0px;
            font-size: 3em;
            color: #FDE8E9;
			text-align: center;
			line-height: 100%;
            vertical-align: text-top;
		}

		#arrow{
            font-size: 3em;
            color: #FDE8E9;
			
            bottom: 0px;
			position: absolute;

			text-align: center;
		}

		#main {
			margin-left: auto;
			margin-right: auto;
			background-color: #E3BAC6;
			position: relative;

		}

		.logo{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 50%;
            border: 2px solid #491c2b;
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
		}


		/* Default CSS for extra small devices */

		/* Small Devices Mobile*/
		@media ( min-width: 576px ) {
	
		}

		/* Medium Devices Tablet*/
		@media ( min-width: 768px ) {

		
		}

		/* Large Devices Desktop*/
		@media ( min-width: 992px ) {


			#logo{
				width: 40%; 
				float: right;
				margin-left: 15px;
				margin-bottom: 15px;
			}
		}


	</style>

  </head>
  <body>
		<div  id="header">

			<?php include "nav.php"; ?>
			
			<div class="row">
				
				<h1>Inspo</h1>
				<div id="header-info">
					<p>Project Summary</p>
				</div>

				<div id="arrow">
					<p>v</p>
				</div>
				
			</div>
			

		</div> <!-- #header -->
	
	<div class="container-fluid" id="wrapper">
		<div class = "row no-gutters">
			<div class = "col-12 " id = "main">

				<h2>Website Topic and Purpose</h2>

                <p>My website is about hosting a party and having people visit the website to rsvp.
                    They will be able to see the details of the party and add songs to a playlist.
                </p>

				<p>My four sections are RSVP, Party Details (what to expect, what to where, etc.), Playlist, and Trivia API</p>

				<h2>Instructions</h2>

				<p>Right now, the website is meant for the host to organize data. The host has the power to 
					add, edit, delete, and view guest information for the RSVP. The host simply has to log on to the website and edit the 
					data of each person to keep track of who is coming to the party. A future development could be added usernames and passcodes
					so that only the host has full access to CRUD and other users can only edit their own details.
					The website also has a playlist creator and a trivia practice.
				</p>

				<p>My extras are: Responsive Web Design, Event-driven DOM Manipulation, and JSON / JSONP API. I used a trivia API called OpenTBD.com</p>

				<a href=https://opentdb.com/api_config.php>link to API documentation</a>
				
				<h2>Source of Data</h2>

				<p>All of the data is manually put in by myself. I entered my friends names, possible rsvp
					responses, and items that the guests could bring.
				</p>

				<h2>Database Diagram</h2>

				<img class="logo" src="img/party_database.png" alt="Database Diagram">

				<h2>Extra Resources</h2>

				<p>I used Figma to design the footer of the website</p>

				<h2>CSS Frameworks Used</h2>

				<p>I used bootstrap for easy design with containers, buttons, and forms. </p>

				<p> <a href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">Bootstrap Stylesheet</a></p>

	
                <h2>Wireframes</h2>

                <img class="logo" src="img/wireframehome.png" alt="Wireframes">

                <img class="logo" src="img/wireframeplaylist.png" alt="wireframeplaylist">

                <img class="logo" src="img/wireframeapi.png" alt="wireframeapi ">
				
		

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

	<script>
        // Store songs in local storage
        let songs = JSON.parse(localStorage.getItem('songs')) || [];

        // Render existing songs from local storage
        loadSongs();

		// Add event listener to form submit
	document.getElementById('songForm').addEventListener('submit', function (e) 
	{
    e.preventDefault();

    // Get input values
    let songName = document.getElementById('songName').value;
    let artistName = document.getElementById('artistName').value;

    // Add song to songs array
    songs.push({
        songName: songName,
        artistName: artistName
    });

    // Store updated songs array in local storage
    localStorage.setItem('songs', JSON.stringify(songs));

    // Render songs in table
    loadSongs();

    // Clear form inputs
    document.getElementById('songForm').reset();
});

// Function to render songs in table
function loadSongs() {
    let songList = document.getElementById('songList');
    songList.innerHTML = '';

    // Loop through songs array and create table rows
    for (let i = 0; i < songs.length; i++) {
        let row = document.createElement('tr');
        let songNameCol = document.createElement('td');
        let artistNameCol = document.createElement('td');
        let actionCol = document.createElement('td');

        songNameCol.textContent = songs[i].songName;
        artistNameCol.textContent = songs[i].artistName;

        // Create delete button
        let deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Delete';
        deleteBtn.classList.add('btn', 'btn-danger', 'btn-sm');
        deleteBtn.addEventListener('click', function () {
            // Remove song from songs array
            songs.splice(i, 1);

            // Store updated songs array in local storage
            localStorage.setItem('songs', JSON.stringify(songs));

            // Render songs in table
            loadSongs();
        });

        actionCol.appendChild(deleteBtn);

        row.appendChild(songNameCol);
        row.appendChild(artistNameCol);
        row.appendChild(actionCol);

        songList.appendChild(row);
    }
}

// Call the loadSongs function to initially render songs from local storage
loadSongs();

	</script>
  </body>
</html>