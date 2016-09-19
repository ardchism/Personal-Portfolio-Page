<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Adam Chisholm's C Projects</title>
	
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
					<li class="active"><a href="cProjects.php">C Projects</a></li>
					<li><a href="javaProjects.php">JAVA Projects</a></li>
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
						<td>Plane Info Log</td>	                    
						<td>
							This program stores flight information using a stucture and dynamic memory allocation. 
							The features include adding new flights, printing all flights,
							printing flights with a matching flight number, 
							deleting flights by flight number, saving the list of flights to a text file, and loading a list of flights from a text file. 
							Saving and loading a list use streams to read or write to a text file, 
							so the project can be saved for later use.
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
						
											<h4 class="modal-title">Plane Info Log for WINDOWS</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/Plane_Info_Log.c">Source Code Download</a>
											<a class="btn btn-success" href="code/Plane_Info_Log.exe">EXE Download</a>
											<a class="btn btn-success" href="https://gist.githubusercontent.com/ardchism/609debe52fbda4673b4c/raw/f172a9683ce42241411135563b5d60b9da543d5b/Plane_Info_Log.c">Raw Code LINK</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/609debe52fbda4673b4c">GIT LINK</a> 
										</div>
									</div>
								</div>
							</div>
								
						</td>	               
					</tr>
						                	               
					<tr>	                    
						<td>Compute Resistance</td>	                    
						<td>
							This program computes resistance for n number of resistors on a circuit, and was created using the GNU compiler. 
							This program executes in the terminal, and can be compiled for windows or linux.   
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
						
											<h4 class="modal-title">Compute Resistance</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/compute_resistance.c">Source Code Download</a>
											<a class="btn btn-success" href="code/compute_resistance.exe">EXE Download</a>
											<a class="btn btn-success" href="code/compute_resistance.out">OUT Download</a>
											<a class="btn btn-success" href="https://gist.githubusercontent.com/ardchism/52841504b0c7c9500270/raw/7f7a659d21d13cc0033d39547b5d2efc29f6fbad/compute_resistance.c">Raw Code LINK</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/52841504b0c7c9500270">GIT LINK</a> 
										</div>
									</div>
								</div>
							</div>
								
						</td>	                
					</tr>
				
					<tr>	                    
						<td>Data Structures</td>	                   
						<td>
							A queue, stack, and linked list data structure implemented in C.
							The structures can store an int, a float, or a string, and they are all implemented using dynamic memory allocation. 
							Also they all contain functions to create, add, remove, and find height.
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
						
											<h4 class="modal-title">Data Structures</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/data_structures.zip">Source Code Download</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/169ba1163eb097de3aa2">GIT LINK</a> 
										</div>
									</div>
								</div>
							</div>
								
						</td>	                
					</tr>	                
				
					<tr>
						<td>Sort Functions</td>	                    
						<td>
							This project contains functions to sort an int array using the quick sort, shell sort, insertion sort, selection sort, and bubble sort techniques.
							The functions where tested using the GNU compiler on a windows system.
							Each function only works with arrays, but could easly be converted for strings, chars, or floats.
						</td>
						<td>
							<button class="btn btn-success" data-toggle="modal" data-target="#myModal4">Download</button>
	
							<div class="modal" id="myModal4">
		
								<div class="modal-dialog modal-sm">
			
									<div class="modal-content">
				
										<div class="modal-header">
						
											<button class="close" data-dismiss="modal">
												<span class="glyphicon glyphicon-remove"></span>
											</button>
						
											<h4 class="modal-title">Sort Functions</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/sort_functions.zip">Source Code Download</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/9ec30e87ae23c807cb2d4a7d0bc3da42">GIT LINK</a> 
										</div>
									</div>
								</div>
							</div>
								
						</td>	                
					</tr>	                	                
				
					<tr>
						<td>Compute the Distance Between Two Points</td>	                    
						<td>
							This program finds the distance between two user provided points on a 2D plot.
							It uses the terminal for user input, and will compile on windows or linux.
						</td>
						<td>
							<button class="btn btn-success" data-toggle="modal" data-target="#myModal5">Download</button>
	
							<div class="modal" id="myModal5">
		
								<div class="modal-dialog modal-sm">
			
									<div class="modal-content">
				
										<div class="modal-header">
						
											<button class="close" data-dismiss="modal">
												<span class="glyphicon glyphicon-remove"></span>
											</button>
						
											<h4 class="modal-title">Distance between Points</h4>
										</div>
					
										<div class="modal-body">
											<a class="btn btn-success" href="code/distance_between_two_points.c">Source Code Download</a>
											<a class="btn btn-success" href="code/distance_between_two_points.out">.OUT Download</a>
											<a class="btn btn-success" href="code/distance_between_two_points.exe">.EXE Download</a>
											<a class="btn btn-success" href="https://gist.github.com/ardchism/067076a8ccc6056aa367">GIT LINK</a> 
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
