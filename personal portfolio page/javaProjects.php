<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Adam Chisholm's Java Projects</title>
	
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

<body id="projects">
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
					<li class="active"><a href="javaProjects.php">JAVA Projects</a></li>
					<li><a href="webProjects.php">Web Applications</a></li>
					<li><a href="index.php">About Me</a></li>
				</ul>	

			</div>
			
		</div>
	</div>
	
	<div class="container" id="secondContainerprojects">
		<div class="row" id="topRowProject">
			<div class="col-md-6 col-md-offset-3">
				<table class="table table-bordered table-hover">	                	                
					<tr>	                    
						<th>Project Name</th>	                    
						<th>Description</th>
						<th>CODE</th>
					</tr>	                	                
				
					<tr>	                    
						<td>Project Euler 1-8 Swing Program</td>	                    
						<td>
							This program is created to solve Project Euler problems 1-8 using the awt and swing java librarys.
							A simple GUI is provided using tabs, text-fields, text-areas, and buttons. 
							A Flow layout was used for all 8 tabs, and the tabs are set to scroll.
							Lamba statements were used to execute the swing class, so JAVA 8 is necessary.
						</td>
						<td>
							<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Download</button>
	
							<div class="modal" id="myModal">
		
								<div class="modal-dialog modal-sm">
			
									<div class="modal-content">
				
										<div class="modal-header">
						
											<button class="close" data-dismiss="modal">
												<span class="glyphicon glyphicon-remove"></span>
											</button>
						
											<h4 class="modal-title">Project Euler 1-8 Swing Program</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/Euler_1_8_tabs_Source.zip">Source Code Download</a>
											<a class="btn btn-success" href="code/Euler_1_8_tabs_Program.zip">Program Download</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/2524986f44391eedbbb878dd20665456">GIT LINK</a>
										</div>
									</div>
								</div>
							</div>
								
						</td>	               
					</tr>
						                	               
					<tr>	                    
						<td>Find the Product of Pythagorean Triplet with a Sum of n</td>	                    
						<td>
							This program finds all Pythagorean triplets, and checks if the sum of a+b+c is equal to n. 
							If a match is found the find_user_triplet method returns the product of a*b*c. 
							The idea for this problem came from Project Euler problem 9, which asks for the product of the one triplet with a sum of 1,000.
							The Dickson method is used to find the triplets, therefore all triplets will be found.
							  
						</td>
						<td>
							<button class="btn btn-success" data-toggle="modal" data-target="#myModal2">Download</button>
	
							<div class="modal" id="myModal2">
		
								<div class="modal-dialog modal-sm">
			
									<div class="modal-content">
				
										<div class="modal-header">
						
											<button class="close" data-dismiss="modal">
												<span class="glyphicon glyphicon-remove"></span>
											</button>
						
											<h4 class="modal-title">Find the Product of Pythagorean Triplet</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/Euler_9_Source.zip">Source Code Download</a>
											<a class="btn btn-success" href="code/Euler_9_Program.zip">Program Download</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/10c85825f171a96fbf0ac302a5fb31eb">GIT LINK</a> 
										</div>
									</div>
								</div>
							</div>
								
						</td>	                
					</tr>
				
					<tr>	                    
						<td>Find the Sum of Primes</td>	                   
						<td>
							This class creates an object, which stores the summation of all prime numbers less than n.
							n will be a field provided by the user, and the user interface will be the terminal.
							An optimized Sieve of Eratosthenes is created in this program, so all primes up to 100,000,000 will be found in less than a minute on a average system.
						</td>
						<td>
							<button class="btn btn-success" data-toggle="modal" data-target="#myModal3">Download</button>
	
							<div class="modal" id="myModal3">
		
								<div class="modal-dialog modal-sm">
			
									<div class="modal-content">
				
										<div class="modal-header">
						
											<button class="close" data-dismiss="modal">
												<span class="glyphicon glyphicon-remove"></span>
											</button>
						
											<h4 class="modal-title">Find the Sum of Primes</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/SumOfPrimes_Source.zip">Source Code Download</a>
											<a class="btn btn-success" href="code/SumOfPrimes_Program.zip">Program Download</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/578407d59a33d5276a9b49b359d9b371">GIT LINK</a> 
										</div>
									</div>
								</div>
							</div>
								
						</td>	                
					</tr>	                                	                
					            
				</table>
			</div>
			
		</div>
	
	</div>
</body>

</html>
