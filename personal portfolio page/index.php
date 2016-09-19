<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Adam Chisholm's Portfolio</title>
	
	<!-- Online JS files (order matters!) -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Style links -->
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional Bootstrap theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- local css -->
	<link rel="stylesheet" type="text/css" href="Personal_Portfolio.css"/>

  </head>
  <body>
    
	<!-- Nav Bar-->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		
			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
				
				<a href="http://www.adamchisholm.name" class="navbar-brand">Adam Chisholm's Portfolio</a>
			</div>
			
			<div class="collapse navbar-collapse" id="menubartabs">
			
				<ul class="nav navbar-nav navbar-right" id="navButtons">
					<li><a href="cProjects.php">C Projects</a></li>
					<li><a href="javaProjects.php">JAVA Projects</a></li>
					<li><a href="webProjects.php">Web Applications</a></li>
					<li class="active"><a href="index.php">About Me</a></li>
				</ul>	

			</div>
			
		</div>
	</div>
	
	<div class="container" id="topContainer">
	
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
			
				<h1>Adam Chisholm's Programming Portfolio</h1>
				
				<p class="lead">These projects utilize the C programming language, JAVA programming language, and Web Applications.</p>
				
				<ul class="list-group">
					<li class="list-group-item">All C programs are desinged to use command line for user input and compiled using the GNU complier.</li>
					<li class="list-group-item">My JAVA projects are applets using AWT, Swing UI apps, and some simple programs using the command line.</li>
					<li class="list-group-item">My Web Applications use HTML 5, JavaScript, CSS3, JQuery, and Twitter Bootstrap.</li>
				</ul>
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Contact Me
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<form class="form-horizontal" action="mailto:ardchism@icloud.com" method="post">
		
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name"/>
								</div>
			
								<div class="form-group">
									<label for="Email">Email:</label>
									<input class="form-control" id="email" name="email" type="email" placeholder="****@abc.net"/>
								</div>
			
								<div class="form-group">
									<textarea class="form-control" rows="3" id="message" name="message" placeholder="Enter Message Here"></textarea>
								</div>
					
								<div class="form-group">
									<input  class="btn btn-success" id="submitIt" name="submitIt" type="submit" value="Submit now"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="secondContainer">
		
		<div class="row" id="rowOne">
		
			<div class="col-md-6 col-md-offset-3" id="utdallas">
				
				<a href="http://jindal.utdallas.edu/">
					<img src="UTD.jpg" alt="some_text" class="img-responsive img-thumbnail img-rounded" id="UTDpic">
				</a>
				<h2 class="center" id="UTDtext">Bachelor of Science in Management Information Systems</h2>
			
			</div>
			
			
		</div>
		
		<div class="row" id="rowTwo">
		
			<div class="col-md-6 col-md-offset-3" id="CPPinstitute">
			
				<a  class="center" href="CppInstituteCertificate.pdf">
					<img src="CLA.jpg" alt="some_text"  class="img-responsive img-thumbnail img-rounded" id="CLApic">
				</a>
				<h2 id="CLAtext">C Programming Language Certified Assiociate</h2>
			
			</div>
			
			
		</div>
		
		<div class="row" id="rowThree">
		
			<div class="col-md-6 col-md-offset-3" id="GitHub">
			
				<a href="https://gist.github.com/ardchism">
					<img src="github.jpg" alt="some_text"  class="img-responsive img-thumbnail img-rounded" id="githubpic">
				</a>
				<h2 id="CLAtext">Link to my Github Gist account</h2>
			
			</div>
			
			
		</div>
	
	</div>
	
	<!--#include virtual="/hit_counter/count.cgi?page=NumberofVisitors&type=text"-->
	
		<!-- link to script text -->
	<script type="text/javascript" src="Personal_Portfolio.js"></script>
	
  </body>
</html>
