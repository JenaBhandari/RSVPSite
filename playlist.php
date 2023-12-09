
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This page allows the user to create a playlist using DOM nodes. They can add and delete nodes and the DOM nodes save to the browser.">
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
			margin: 0px;
            font-size: 5em;
            color: #E3BAC6;
			padding-bottom: 20px;
			padding-top: 100px;
			text-align: center;
			text-shadow: 0px 0px 50px #ecf3ff;
            text-decoration: underline #36558F;
		}

		#header {
			height: 500px;

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


	</style>

  </head>
  <body>


		<div  id="header">

            <?php include "nav.php"; ?>
			
			<div class="row">
				
				<h1>Playlist</h1>
				<div id="header-info">
					
					
				</div>
				
			</div>
			

		</div> <!-- #header -->
	
	<div class="container-fluid" id="wrapper">
		<div class = "row no-gutters">
			<div class = "col-12 " id = "main">

				<div class="container">
					<div class="row">
						<h2 class="col-12 mt-4 mb-4">Add Songs To Playlist!</h2>
					</div> <!-- .row -->
				</div> <!-- .container -->
				
				<div class="container ">
					<form id="songForm">
						<div class="form-row">
							<div class="form-group col-5">
								<label for="songName">Song Name</label>
								<input type="text" class="form-control" id="songName" placeholder="Enter song name">
							</div>
							<div class="form-group col-5">
								<label for="artistName">Artist Name</label>
								<input type="text" class="form-control" id="artistName" placeholder="Enter artist name">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Add Song</button>
					</form>
					<table class="table mt-3">
						<thead>
							<tr>
								<th>Song Name</th>
								<th>Artist Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="songList">
			
						</tbody>
					</table>
				</div>
				
			</div>		  
		</div>
	</div>

	<div id="footer-container">
					<img id="footerimg" src="img/newfooter.png" alt="footer">
	</div> 



<script>		
$(".footer-container>img").each(function(i, img) {
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

	<script>
        //store songs in local storage
        let songs = JSON.parse(localStorage.getItem('songs')) || [];

        //eender existing songs from local storage
        loadSongs();

		//add event listener to form submit
	document.getElementById('songForm').addEventListener('submit', function (e) 
	{
    e.preventDefault();

    //get input values
    let songName = document.getElementById('songName').value;
    let artistName = document.getElementById('artistName').value;

    //add song to songs array
    songs.push({
        songName: songName,
        artistName: artistName
    });

    //store updated songs array in local storage
    localStorage.setItem('songs', JSON.stringify(songs));

    //render songs in table
    loadSongs();

    //clear form inputs
    document.getElementById('songForm').reset();
});


function loadSongs() {
    let songList = document.getElementById('songList');
    songList.innerHTML = '';

    //loop through songs array and create table rows
    for (let i = 0; i < songs.length; i++) {
        let row = document.createElement('tr');
        let songNameCol = document.createElement('td');
        let artistNameCol = document.createElement('td');
        let actionCol = document.createElement('td');

        songNameCol.textContent = songs[i].songName;
        artistNameCol.textContent = songs[i].artistName;

        //create delete button
        let deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Delete';
        deleteBtn.classList.add('btn', 'btn-danger', 'btn-sm');
        deleteBtn.addEventListener('click', function () {
            //remove song from songs array
            songs.splice(i, 1);

            //store updated songs array in local storage
            localStorage.setItem('songs', JSON.stringify(songs));

            //load songs in table
            loadSongs();
        });

        actionCol.appendChild(deleteBtn);

        row.appendChild(songNameCol);
        row.appendChild(artistNameCol);
        row.appendChild(actionCol);

        songList.appendChild(row);
    }
}

//call the loadSongs function to initially render songs from local storage
loadSongs();

	</script>
  </body>
</html>