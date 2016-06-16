<!DOCTYPE html>
<html lang="en">
	<link type="text/html" rel="head" href="php/head.html">
	<body class="sfooter">
		<div class="sfooter-content">
			<!--nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Michael Prinz</a>
					</div>
					<ul class="nav navbar-nav navbar-right" id="navigation">
						<li class="nav-item">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a href="#myform">Contact</a>
						</li>
						<li class="nav-item">
							<a href="#mylinks">Links</a>
						</li>
						<li class="nav-item">
							<a href="#" onClick='alert("Coming Soon!")'>Photos/Art</a>
						</li>
					</ul>

				</div>
				</div>
			</nav-->
			<!--div class ="container">
				<div class ="row">
					<div class ="col-md-12" style="background: transparent" height="131px"></div-->



				<div class = "jumbotron">
					<div class = "bg"></div>
					<div class = "container">
						<h1 class="animated slideInLeft">MICHAEL PRINZ</h1>
						<h2 class="text-center">Web Developer | Santa Fe</h2>
					</div>
				</div>
			<nav class="navbar nav-center">
				<ul class="nav nav-pills">
					<li role="presentation" class="inactive"><a href="#">Home</a></li>
					<li role="presentation"><a href="#">Profile</a></li>
					<li role="presentation"><a href="#">Messages</a></li>
				</ul

			</nav>

			<div class ="container">
				<div class ="row">
					<div class="col-md-4">.col-md-4</div>
					<div class="col-md-4">.col-md-4</div>
					<div class="col-md-4">.col-md-4</div>
						<h2>About Me:</h2>
							</>
					</div>
				</div>


				<div class ="container">
									<div class ="row">
										<div class ="col-md-2"></div>
										<div class ="col-md-8">
											<div class = "content-box">
												<h2>About Me:</h2>
								<p>I'm Michael Prinz, full stack web developer. After a successful career as a lawyer, I took the plunge into web development.
								I attended the Deep Dive Coding Boot Camp at the CNM Stemulus Center and was immersed in the languages that drive the internet. When I'm not coding I can be found playing guitar, taking photos, or rock hunting in the nearby mountains.</p>
												</div>
											</div>
										</div>
										<div class="row">
						<div class = "col-md-6">
							<div class ="content-box">
								<h2>My Skills:</h2>
								<div class="progress">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
										  aria-valuemin="0"
										  aria-valuemax="100" style="width:50%">
										HTML
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
										  aria-valuemin="0"
										  aria-valuemax="100" style="width:40%">
										CSS
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70"
										  aria-valuemin="0"
										  aria-valuemax="100" style="width:35%">
										JavaScript
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
										  aria-valuemin="0"
										  aria-valuemax="100" style="width:30%">
										PHP
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
										  aria-valuemin="0"
										  aria-valuemax="100" style="width:30%">
										MySQL
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
										  aria-valuemin="0"
										  aria-valuemax="100" style="width:30%">
										Angular
									</div>
								</div>
							</div>
						</div>
					</div>

					<form class="form-horizontal well" method="post" action="php/mailer.php" id="myform">
						<div class="form-group">
							<h3><b>Contact Me:</b></h3>
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
		<br>
		<div id="output-area"></div>
		<div class="container" id="mylinks">
			<div class="row">
				<div class="col-md-12">
				<div class = "content-box">
					<h2>Links to interesting/inspiring sites:</h2>
					<ul>
						<li><a href="http://www.jpl.nasa.gov/">Cal Tech, Jet Propulsion Laboratory</a><br>I love exploring this site. This is where I found the background image you see on this page.</li>
						<li><a href="http://joyceleung.ca">Joyce Leung</a><br>I hope to someday be as skilled as this web developer from Vancouver.</li>
						<li><a href="https://makesantafe.org/">Make Santa Fe</a><br>The newly opened Santa Fe maker space, I can't wait to join and start making!</a></li>
						<li><a href="https://meowwolf.com/">Meow Wolf</a><br>An amazing immersive experience in Santa Fe. You have to experience it to truly understand.<a></li>
						<li><a href="http://josephpayton.com/about/">Joseph Payton</a><br>Another site by an amazing web developer.</li>
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