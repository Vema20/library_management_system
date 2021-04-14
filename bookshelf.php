<!DOCTYPE html>
<html>
<head>
	<title>Book Shelf</title>
	<style type="text/css">

		
		img{
			border-radius: 10px 10px 10px 10px;
			margin: 15px;
		}
		
	</style>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<?php
		 include('nav.php');
		// session_start();
		 if (!isset($_SESSION['name'])) {
		// 	# code...
		header('location:login.php');
		 }



		?>
	</div>
	<div id="banner">
		<span class="head">Library Management System</span><br />
		<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">"Everyone is a scholar; if you have a brain, you can study! Empower Yourself Now!"</marquee>
	</div>
<br />
		<div class="container-fluid">
			<div class="row">
				<div class="col-5">
					<img style="width:500px;"  src="https://cdn.pixabay.com/photo/2020/12/19/05/38/girl-5843646__340.png" alt="..." class="img-fluid">
					
				</div>
				
              <div class="col-4">
            	<div style="border-radius: 30px;margin: 15px; margin-top:180px;background-color:#FACB9F;box-shadow: 10px 10px 8px 5px black" class="card">
				  <div class="card-body">
					<center>
						<form method="POST" action="">
						 <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Book Name:</label>
						    <input type="text" class="form-control" name="book_name" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
						 </div>

						 <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Author:</label>
						    <input type="text" class="form-control" name="author" id="exampleInputPassword1" required="">
						 </div>

						 <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Book Condition:</label>
						    <input type="text" class="form-control" name="book_nature" id="exampleInputPassword1" required="">
						 </div>
						  
						  <button style="background-color: #EC7C13" type="submit" name="borrow" class="btn btn-warning">Borrow</button>
					</form>
				</center>
					    
				  </div>
				</div>

				<?php

			  require('dbConnect.php');
			  
			if (isset($_POST['borrow'])) {
				header('location:borrowed.php');

				$name = $_POST['book_name'];
				$auth = $_POST['author'];
				$nature = $_POST['book_nature'];
				
				//echo "$productName,$productDesc,$productCost";
				$sql = "INSERT INTO books(name,author,nature)VALUES(?,?,?)";
			//prepare query
			if ($stmt = mysqli_prepare($conn,$sql)) {
				//echo "Successful query";
				# code...
				mysqli_stmt_bind_param($stmt,"sss",$param_name,$param_auth,$param_nat);
				//binding

				$param_name = $name;
				$param_auth = $auth;
				$param_nat = $nature;

				
				//execute stmt
				if (mysqli_stmt_execute($stmt)) {
					echo "<h4 style='color:green'>Successfully added to reading list</h4>";
					# code...
				}else{
					echo "<h4 style='color:red'>Oops! Something went wrong</h4>";
				}
			}
			else{
				echo "There's a problem with the query";
			}

				# code...
			}

			

			?>

		</div>

</div>

		<div style="background-color: #E3B891   ; margin-top:150px;padding: 10px " class="col-12">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>