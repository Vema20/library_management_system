<!DOCTYPE html>
<html>
<head>
	<title>Book Shelf</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<?php include('nav.php')?>
	</div>
		<div class="container-fluid">
			<div class="row">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
			   		 <div class="carousel-inner">
				   		 <div class="carousel-item active">
				      		<img style="width:250px;height: 250px"  src="https://images.unsplash.com/reserve/fvD9myEgRued3zLne2GS__DSC0033-1.jpg?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8Ym9vayUyMHNoZWxmfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." class="img-fluid">
				    	 </div>
						    <div class="carousel-item">
						      <img style="width:250px;height: 250px" src="https://images.unsplash.com/photo-1565343895007-046830f6cacd?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjJ8fGJvb2slMjBzaGVsZnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." class="img-fluid">
						    </div>
 
				     </div>
		        </div>
	        </div>
	       
	        

            <div class="col-7">
				<form method="POST" action="">
					 <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Book Name</label>
					    <input type="text" class="form-control" name="book_name" id="exampleInputEmail1" aria-describedby="emailHelp" >
					 </div>

					 <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Author</label>
					    <input type="text" class="form-control" name="author" id="exampleInputPassword1">
					 </div>

					 <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Book Condition</label>
					    <input type="text" class="form-control" name="book_nature" id="exampleInputPassword1">
					 </div>
					  
					  <button type="submit" name="borrow" class="btn btn-primary">Borrow</button>
				</form>
				<?php

			  require('dbConnect.php');
			  
			if (isset($_POST['borrow'])) {

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