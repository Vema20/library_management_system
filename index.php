<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<style type="text/css">
		
		img{
			border-radius: 30px;
		}
	</style>
</head>
<body>
		<div class="container-fluid">
			<?php 
			ob_start();
				include('nav.php');
			// session_start();
			 	if (!isset($_SESSION['name'])) {
			// 	# code...
				header('location:login.php');
			 }
             ob_end_flush();
			?>
			<div id="banner">
				<span class="head">Library Management System</span><br />
				<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">"The Library is inhabited by spirits which come out of the pages at night"</marquee>
			</div>
		<br />
		</div>
		<div style="margin: 10px" class="col-10">
			<div class="alert alert-warning" role="alert">
	 			 Welcome to my library
	 	</div>
	 </div>
		<h3 style="color:black;margin: 10px;padding:10px;font-family: fantasy;">My Library</h3>
		<!-- beginning of slidders -->
      
		<div class="container-fluid">
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						  </div>
						  <div class="carousel-inner">

						    <div class="carousel-item active">
						    	<img  style="width: 450px;height: 450px" src="https://cdn.pixabay.com/photo/2020/02/06/20/01/university-library-4825366__340.jpg" class="d-block w-100" alt="..." class="img-fluid">  
						    </div>
						    <div class="carousel-item">
						    <img style="width: 450px;height: 450px"src="https://images.unsplash.com/photo-1613191414063-e87cefa3b3ae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" class="d-block w-100" alt="..." class="img-fluid">
							</div>

							<div class="carousel-item">
						      <img  style="width: 450px;height: 450px" src="https://cdn.pixabay.com/photo/2013/07/13/12/33/shelf-159852__340.png" class="d-block w-100" alt="..." class="img-fluid">
						    </div>

						    <div class="carousel-item">
						      <img  style="width: 450px;height: 450px"src="https://cdn.pixabay.com/photo/2020/05/16/16/43/book-5178205__340.jpg" class="d-block w-100" alt="..." class="img-fluid">
						    </div>
						    
						    
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
					</div>
				
				
			</div>
			<!-- end of slidders -->
		<!-- beginning of cards  -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-4">
					  <div style="border-radius: 30px;margin: 15px;background-color:#FACB9F;box-shadow: 10px 10px 8px 5px black" class="card-body">
					    <u><h5 style="font-family: monospace;padding:5px;margin:25px;font-size: 30px; color:#E88B34" class="card-title">Our Mission</h5></u>
					    <p style="font-family: cursive; font-size: 20px;"  class="card-text">Provide a dynamic learning environment that supports research, technology, resourceful learning, papers and archives that foster 21st Century learning. </p>
					  </div>
					</div>
					<div class="col-4">
						<div style="border-radius: 30px;margin: 15px;background-color:#FACB9F;box-shadow: 10px 10px 8px 5px black" class="card-body">
					       <u><h5 style="font-family: monospace;padding:5px;margin:25px;font-size: 30px; color: #E88B34" class="card-title">Our Vision</h5></u>
					    	  <p style="font-family: cursive; font-size: 20px;" class="card-text">We believe passionately in the power of education to change attitudes, lives, and ultimately, the world.</p>
					  	</div>
					  </div>
					  	<div class="col-4">
					  	<div style="border-radius: 30px;margin: 15px;background-color:#FACB9F;box-shadow: 10px 10px 8px 5px black" class="card-body">
					       <u><h5 style="font-family: monospace;padding:5px;margin:25px;font-size: 30px; color: #E88B34" class="card-title">Core Values</h5></u>
					    	  <ul style="font-family: cursive; font-size: 20px;"   type="bullets" class="card-text">
						    	  	<li>Honesty</li>
						    	  	<li>Integrity</li>
						    	  	<li>Trustworthy</li>
						    	  	<li>Hardwork</li>
						    	  	<li>Self-reliance</li>
					    	   </ul>
					  	</div>
					  </div>

						
					
					
				</div>
				
			</div>
			
		</div>

		<!-- end of cards -->

			<div style="background-color: #E3B891; margin-top:150px;padding: 10px " class="col-12">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
			
		</div>
		
			
	
			
		
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>