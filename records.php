<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		img{
			border-radius: 15px 15px 15px 15px;
		}

	</style>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
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
				<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Records</marquee>
			</div>
<br />
		</div>
		
		<h3 style="color:black;margin: 10px;padding:10px;font-family: fantasy;">My Records</h3>
		<div class="container-fluid">
			<div class="col-8">
				<div class="row">
					<?php
						 require_once('dbConnect.php');

						 $sql = "SELECT *FROM  books ORDER BY id Desc";
						 $result = mysqli_query($conn,$sql);
						 if ($result) {
						 	$rows = mysqli_num_rows($result);
						 	if ($rows>0) {
						 		while ($record=mysqli_fetch_assoc($result)) {
						 			//echo $record['name'].'Price Ksh'.$record['cost'];
						 			//echo "<br>";
						 			echo'
						 			
									<div style="margin:10px;border-radius: 30px;background-color:#FACB9F;box-shadow: 10px 10px 8px 5px black" class="card col-4">
									  <div class="card-body">
									    <h5 class="card-title">'.$record['name'].'</h5>
									    <p class="card-text">'.$record['author'].'</p>
									    <p style="font-family:cursive" class="card-text">'.$record['nature'].'</p>
									    
									  </div>
									</div>
									
									
						 			';
						 			

						 			# code...
						 		}
						 		# code...
						 	}else{
						 		echo '<div style="margin:10px" class="alert alert-warning" role="alert">
						  No books borrowed!
						</div>';
						echo "<a style='background-color:#EC7C13;width:130px;padding:10px;margin:5px;border:0px;' href='bookshelf.php' class='btn btn-primary'>Borrow books</a>";
						 	}
						  	# code...
						  }else{
						  	echo "something went wrong.Try Again!";
						  } 



						?>
					
				</div>
				
			</div>
			
		</div>
		
		

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