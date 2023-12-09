
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This allows the user to generate easy trivia questions (gives search input of number of questions and category). Utilizes API OpenTDB for the questions. Answers blur until cursor hovers over.">
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

		.table th, .table td {
			text-align: center;
			vertical-align: middle;
		}

		table td.answer {
  			filter: blur(10px);
		}

		table td.answer:hover {
  			filter: none;

		}

		h3{
			text-align: center;
		}



		/* Default CSS for extra small devices */


	</style>

  </head>
  <body>


		<div  id="header">

            <?php include "nav.php"; ?>
			
			<div class="row">
				
				<h1>Trivia Practice</h1>
				<div id="header-info">
					
					
				</div>
				
			</div>
			

		</div> <!-- #header -->
	
		<div class="container-fluid" id="wrapper">
		<div class = "row no-gutters">
			<div class = "col-12 border border-dark" id = "main">

				<div class="container">
					<div class="row">
						<h2 class="col-12 mt-4 mb-4">Search the Trivia API!</h2>
						<p>My friends and I love playing trivia nights for random prizes. 
							We always have a great time competing against each other and testing our knowledge on various subjects. 
							To prepare for our upcoming Friday night games, using a trivia API like the one provided here would be a 
							great way to practice and improve your skills. P.S Don't worry.. all the questions are set to easy difficulty : &#41;</p>

						<h3>So.. are you ready???? Select different options below to generate trivia to test your abilities!</h3>
					</div> <!-- .row -->
				</div> <!-- .container -->
				

				<div class="container text-center col-6">

					<img src="img/goodluckk.png" class="img-fluid" alt="goodlucksticker"></img>

				</div>

		<div class="row">
			<form class="col-12" id="search-form">
				<div class="form-group row">
					<div class="col-6 mt-6 ">
						<label for="amount-questions" class="col-6 col-form-label text-sm-right">Number of Questions:</label>
						<select name="amount" id="amount-questions" class="form-control">
									<option value="1" selected>1</option>
									<option value="2" >2</option>
									<option value="3" >3</option>
									<option value="4" >4</option>
									<option value="5" >5</option>
									<option value="6" >6</option>
									<option value="7" >7</option>
									<option value="8" >8</option>
									<option value="9" >9</option>
									<option value="10" >10</option>
						</select>
					</div>
				</div>
				

				<div class="form-group row">

					<label for="category-type" class="col-sm-8 col-form-label text-sm-right">Category:</label>
					<div class="col-12 mt-6 col-sm-6 col-lg-6">
						<select name="category" id="category-type" class="form-control">
									<option value="0" selected>Any Category</option>
									<option value="9">General Knowledge</option>
									<option value="11" >Entertainment: Film</option>
									<option value="12" >Entertainment: Music</option>
									<option value="14" >Entertainment: Television</option>
									<option value="17" >Science and Nature</option>
									<option value="19" >Science: Mathematics</option>
									<option value="21" >Sports</option>
									<option value="22" >Geography</option>
									<option value="23" >History</option>
									<option value="27" >Animals</option>
									
						</select>
					</div>
		
				</div> <!-- .form-row -->

				<div class="form-group row">
					<div class="col-12 mt-4 col-sm-auto">
						<button type="submit" class="btn btn-primary">Search</button>
				</div>

				</div>	

			</form>
		</div> <!-- .row -->
		<div class="row">
			<div class="col-12 mt-4">

				Showing <span id="num-results" class="font-weight-bold">1</span>  Questions.

			</div>
			<table class="table table-responsive table-striped col-12 mt-3">
				<thead>
					<tr>
						<th>Number</th>
						<th>Question</th>
						<th>Answer</th>
					</tr>
				</thead>
				<tbody>


				</tbody>
			</table>
		</div> <!-- .row -->
	</div> <!-- .container -->
				
			</div>		  
		</div>
	</div>

	<div id="footer-container">
					<img id="footerimg" src="img/newfooter.png" alt="footer">
	</div> 


<!-- 
<script>		
$(".footer-container>img").each(function(i, img) {
    $(img).css({
        position: "relative",
        left: ($(img).parent().width() - $(img).width()) / 2 
    });
}); -->

</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<!-- Popper and Bootstrap JS Below -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
	<script src="http://303.itpwebdev.com/~hannah/itp303/math.js"></script>
	<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
	
	<script>

        
        const initAjaxSetting = {
				url: "https://opentdb.com/api.php?amount=10",
				dataType: 'json',
				success: function(data) {
					console.log(data)
					console.log(data.results[0])
					document.querySelector('tbody').innerHTML = '';
					document.querySelector('#num-results').innerHTML = data.results.length;
					
					console.log('hi')
        
					count = 1;

					for (t of data.results) {
						createRow(t)
						count = count + 1;
					}
				},
				error: function(error) {
					alert("AJAX Error")
					console.log(error)
				}
			}
        $.ajax(initAjaxSetting)
        


		document.querySelector('#search-form').onsubmit = function(){
			console.log("In submit")
			const amount = document.querySelector('#amount-questions').value.trim();
			const category = document.querySelector('#category-type').value.trim();
			console.log(amount)
			console.log(category)

    
			endpoint = "https://opentdb.com/api.php?amount=" + amount
			if(category != '0')
			{
				endpoint += "&category=" + category
			}

			endpoint += "&difficulty=easy&type=multiple"

			console.log(endpoint)
			

			const ajaxSetting = {
				url: endpoint,
				dataType: 'json',
				success: function(data) {
					console.log(data)
					console.log(data.results[0])
					document.querySelector('tbody').innerHTML = '';
					document.querySelector('#num-results').innerHTML = data.results.length;

					
					count = 1;

					for (t of data.results) {
						createRow(t)
						count = count + 1;
					}
				},
				error: function(error) {
					alert("AJAX Error")
					console.log(error)
				}
			}

			$.ajax(ajaxSetting)

    
			return false;
		}

        

		function createRow(trivia){
			/* validation to make sure movie exist and is an object */

			var tr = document.createElement('tr');
			var tdNumber = document.createElement('td');
			var tdQuestion = document.createElement('td');
			var tdAnswer = document.createElement('td');

			tdNumber.innerHTML = count;
			tdQuestion.innerHTML = trivia.question;
			tdAnswer.innerHTML = trivia.correct_answer; 

			tr.appendChild(tdNumber);
			tr.appendChild(tdQuestion);
			tr.appendChild(tdAnswer);

			tdAnswer.classList.add('answer');

			document.querySelector('tbody').appendChild(tr);
		}

	</script>

  </body>
</html>