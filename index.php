<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
		<div class="container-fluid">
			<?php include('nav.php')?>
		</div>
		<div style="margin: 10px" class="col-10">
			<div class="alert alert-warning" role="alert">
	 			 Welcome to my library
	 	</div>
	 </div>
		<h3 style="color:#E88B34;margin: 10px;padding:10px;font-family: fantasy;">My Library</h3>

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
						      <img style="width: 450px;height: 450px"src="https://images.unsplash.com/photo-1613191414063-e87cefa3b3ae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" class="d-block w-100" alt="..." class="img-fluid">
						    </div>
						    <div class="carousel-item">
						      <img  style="width: 450px;height: 450px"src="https://images.unsplash.com/photo-1552767058-d1f98e0f364d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTQ3fHxsaWJyYXJ5JTIwaW50ZXJpb3J8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." class="img-fluid">
						    </div>
						    <div class="carousel-item">
						      <img  style="width: 450px;height: 450px" src="https://images.unsplash.com/photo-1485322551133-3a4c27a9d925?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTU5fHxsaWJyYXJ5JTIwaW50ZXJpb3J8ZW58MHx8MHw%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." class="img-fluid">
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
			<div style="background-color: #FBB87A  ; margin: 5px;padding: 10px " class="col-12">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
			
		</div>
		
			
	
			
		
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>