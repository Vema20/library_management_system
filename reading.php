<!DOCTYPE html>
<html>
<head>
	<title>Reading</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<?php include('nav.php')?>
	</div>


	<div class="container-fluid">
		<div class="col-7">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Author</th>
					<th>Condition</th>
				</tr>


		<?php
		 require_once('dbConnect.php');

		 $sql = "SELECT *FROM  books";
		 $result = mysqli_query($conn,$sql);

		 if ($result) {
		 	$rows = mysqli_num_rows($result);
		 	if ($rows>0) {
		 		while ($record=mysqli_fetch_assoc($result)) {
		 			//echo $record['name'].'Name:'.$record['author'].'Condition'. $record['nature'];
		 			//echo "<br>";
		 		echo "<tr>";
	 			echo "<td>".$record['name']."</td>";
	 			echo "<td>".$record['author']."</td>";
	 			echo "<td>".$record['nature']."</td>";

	 			echo "</tr>";
		 			

	 			# code...
	 		}
	 		# code...
	 	}else{
	 		echo '<div class="alert alert-warning" role="alert">
	  No books borrowed
	</div>';
	echo "<a href='bookshelf.php' class='btn btn-primary'>Bookshelf</a>";
	 	}
	  	# code...
	  }else{
	  	echo "something went wrong".mysqli_error($conn);
	  } 



	?>
	</table>
	</div>

		<div style="background-color: #FBB87A  ; margin: 5px;padding: 10px " class="col-12">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
		
		
	</div>

</body>
</html>