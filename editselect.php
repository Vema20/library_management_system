<!DOCTYPE html>
<html>
<head>
	<title>Edit Book</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="container-fluid">
		<?php 
		include('nav.php');
		// session_start();
		if (!isset($_SESSION['name'])) {
			# code...
			header('location:login.php');
		}
		$bookId = $_GET['id'];
		// echo "$bookId";
		//retrieve product
		require_once('dbConnect.php');
		$sql = "SELECT *FROM books WHERE id=".$bookId;
		//execute query
		$result = mysqli_query($conn,$sql);
		if ($result) {
			$book = mysqli_fetch_assoc($result);
			# code...
		}else{
			echo "Something is wrong with your query!";
		}


		?>
		<div id="banner">
			<span class="head">Library Management System</span><br />
			<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">NEON DESIGNS</marquee>
		</div>
<br />

	</div>
	<h3 style="margin: 10px;padding: 5px;font-family: fantasy;color: #E88B34">Edit <?php echo $book['name'];?></h3>

		<div class="container-fluid">
			<div class="row">
				
              <div class="col-4">
            	<div style="border-radius: 30px;margin: 15px;background-color:#FACB9F;box-shadow: 10px 10px 8px 0 rgba(153,153,153)" class="card">
				  <div class="card-body">
					<center>
						<form method="POST" action="">
						 <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Book Name:</label>
						    <input type="text" class="form-control" name="book_name" value="<?php echo $book['name']?>" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
						 </div>

						 <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Author:</label>
						    <input type="text" class="form-control" name="author" value="<?php echo $book['author']?>" id="exampleInputPassword1" required="">
						 </div>
						 <input type="hidden" name="bookId" value="<?php echo $book['id']?>">

						 <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Book Condition:</label>
						    <input type="text" class="form-control" name="book_nature" value="<?php echo $book['nature']?>" id="exampleInputPassword1" required="">
						 </div>
						  
						  <button style="background-color: #EC7C13" type="submit" name="edit" class="btn">Update</button>
					</form>
				</center>
					    
				  </div>
				</div>

				<?php

			  // require('dbConnect.php');
			  
			if (isset($_POST['edit'])) {
				header('location:records.php');
				
				$name = $_POST['book_name'];
				$auth = $_POST['author'];
				$nature = $_POST['book_nature'];
				$bookId = $_POST['bookId'];
				
				//echo "$productName,$productDesc,$productCost";
				// $sql = "INSERT INTO books(name,author,nature)VALUES(?,?,?)";
				$sql = "UPDATE books SET name=?,author=?,nature=? WHERE id = ".$bookId;
				// echo "$sql";
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
					//echo "<h4 style='color:green'>Successfully added to reading list</h4>";
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