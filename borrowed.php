<!DOCTYPE html>
<html>
<head>
	<title>Reading</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
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
		<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Education is the Key to Success</marquee>
	</div>
<br />
	<!-- <h3 style="margin: 10px;padding: 5px;font-family: fantasy;color: #E88B34">Borrowed Books</h3> -->


	<div class="container-fluid">
		<div class="row">
			<div class="col-5">
				<img style="width: 500px;height: 500px;" src="https://cdn.pixabay.com/photo/2016/11/24/13/42/library-1856327__340.jpg" class="img-fluid">
				
			</div>

		<div class="col-6">
		<center>
			<table style="background-color: beige; box-shadow: 10px 10px 8px 5px black" class="table">
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
	 			$bookId = $record['id'];
	 			echo "<td>";
	 			echo'
	 			<a style="background-color:#D6C9BF;"href="editselect.php?id='.$bookId.'" class="btn">Change</a>
                <form method="POST" action="" style="margin-top:5px;">
                <input type="hidden" name="bookId" value="'.$bookId.'"/>
                <button type="submit" name="delete" class="btn" style="background-color:#DF863B">Return</button>
                </form>

	 			';
	 			echo "</td>";

	 			echo "</tr>";
		 			

	 			# code...
	 		}
	 		# code...
	 	}else{
	 		echo '<div class="alert alert-warning" role="alert">
	  No books borrowed
	</div>';
	echo "<a href='bookshelf.php' class='btn btn-warning'>Bookshelf</a>";
	 	}
	  	# code...
	  }else{
	  	echo "something went wrong".mysqli_error($conn);
	  } 



	?>
	
	<?php
	if (isset($_POST['delete'])) {
		// header('location:records.php');
		$bookId = $_POST['bookId'];
		// query
		$sql = "DELETE FROM books WHERE id=".$bookId;
		// execute query
		$result = mysqli_query($conn,$sql);
		if ($result) {
			echo '
			<div class="alert alert-warning" role="alert">
			  Book successfully deleted
			</div>
			';
			# code...
		}else{
			echo "Failed to delete book".mysqli_error($conn);
		}
	}


	?>
	</table>
</center>
	</div>
</div>

		<div style="background-color: #E3B891; margin-top:150px;padding: 10px " class="col-12">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
		
		
	</div>

</body>
</html>