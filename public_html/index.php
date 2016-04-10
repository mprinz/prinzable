<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv= "Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta description=" "

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!--Font awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!--CSS style sheet-->
		<link type="text/css" rel="stylesheet" href="css/style.css">

		<script src="js/custom.js" rel="text/javascript"></script>

		<title>Michael Prinz</title>

	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<main>
				<div class = "jumbotron">
					<div class = "container">
						<h1>Hi, I'm Michael Prinz.</h1>
						<p class="text-center">I'm a web developer based in Santa Fe, NM.</p>
						<div class="nav-center">
							<div class="container"
							<div class="row">
								<div class="col-md-12">
						<ul class="nav nav-pills">
							<li role="presentation"><a href="#myform">Contact</a></li>
							<li role="presentation"><a href="#mylinks">Links</a></li>
							<li role="presentation"><a href="#"onClick='alert("Coming Soon!")'>Photos/Art</a></li>
						</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class ="container">
									<div class ="row">
										<div class ="col-md-6">
											<div class = "content-box">
												<h2>About Me:</h2>
								<ul>
									<li>Born and raised in Albuquerque.</li>
									<li>I was a lawyer before becoming a web developer.</li>
									<li>I love exploring New Mexico's beautiful landscapes and historic sites.</li>
									<li>I'm married and you can check out my wife's amazing work at <a href="http://www.archinia.com/">Archinia.com.</a></li>
								</ul>
							</div>
						</div>
						<div class = "col-md-6">
							<div class ="content-box">
								<h2>My Tech Toolbox:</h2>
								<!--div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
										  aria-valuemin="0"
										  aria-valuemax="100" style="width:40%">
										HTML5
									</div-->


								<ul>
									<li>HTML5</li>
									<li>CSS3</li>
									<li>Bootstrap</li>
									<li>JavaScript/Angular</li>
									<li>PHP</li>
									<li>MySQL</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
					<div class="container">
						<div class="row">
							<div class="col-md-6">

					<form class="form-horizontal well" method="post" action="php/mailer.php" id="myform">
						<div class="form-group">
							<p><b>Contact Me:</b></p>
							<label for="name">Name</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
							</div>
						</div>
						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>
								</div>
							<div class="col-md-6">
								<img src="images/mike.png" alt="photo of Michael">
								</div>
						</div>
						</div>
		<br>
		<div id="output-area"></div>
		<div class="container" id="mylinks">
			<div class="row">
				<div class="col-md-12">
				<div class = "content-box">
					<h2>Links to interesting/inspiring sites:</h2>
					<ul>
						<li><a href="http://www.jpl.nasa.gov/">Cal Tech, Jet Propulsion Laboratory</a><br>I love exploring this site. This is where I found the background image you see on this page.</li>
						<li><a href="http://andyshora.com">Andy Shora</a><br>I hope to someday be as skilled as this web developer from London.</li>
						<li><a href="https://makesantafe.org/">Make Santa Fe</a><br>The newly opened Santa Fe maker space, I can't wait to join and start making!</a></li>
						<li><a href="http://etantdonnes.com/">Michael Schilling</a><br>Mr. Schilling is a member of Make Santa Fe. I found his webpage there and it has lots of interesting art and links</a></li>
					</ul>
				</div>
				</div>
				</div>
			</div>
			</main>
		<footer>
			<div class="container">
				<div class="row footerRow">
					<div class="col-md-4">
					</div>

					<div class="col-md-4 text-center">
				&copy; 2016 Michael Prinz <br>
						<a href="https://twitter.com/mnprinz" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="https://www.linkedin.com/in/michael-prinz-58b28233"><i class="fa fa-linkedin fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="https://github.com/mprinz"><i class="fa fa-github fa-lg"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="https://instagram.com/mnprinz"><i class="fa fa-instagram fa-lg"></i></a>
					</div>
				</div>
		</footer>
		</div>
	</body>
</html>