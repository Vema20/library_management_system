<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<style type="text/css">
		img{
			border-radius: 10px 10px 10px 10px;
			margin: 15px;
		
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="container-fluid">
		<?php include('nav.php')

		?>
		<div id="banner">
			<span class="head">Library Management System</span><br />
			<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Log In</marquee>
	</div>
<br />
	</div>
	
	 </div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-5">
				<img style="width: 450px;" src="https://cdn.pixabay.com/photo/2018/02/28/12/25/login-3187888__340.jpg" class="img-fluid">
				
			</div>
		

			<div class="col-4">

				<div style="border-radius: 30px;margin: 10px;background-color:#FACB9F;box-shadow: 10px 10px 8px 0 black" class="card">
					  <div class="card-body">
					  	<center>
					  	<form method="POST" action="">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email:</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>					    
					  </div>

					
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Password:</label>
					    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" required>					    
					  </div>

					  
					  <button style="background-color: #EC7C13" type="submit" name="login" class="btn btn-warning">Log in</button>

				</form>

				<?php
				if (isset($_POST['login'])) {
					$email = $_POST['email'];
					$password = $_POST['password'];

					require_once('dbConnect.php');

					$sql = "SELECT *FROM students WHERE email=?";

					if ($stmt = mysqli_prepare($conn,$sql)) {
						//binding
						mysqli_stmt_bind_param($stmt,"s",$param_email);
						$param_email = $email;
						// $param_password = $password;

						//execute
						mysqli_execute($stmt);
						//fetch results
						$result = mysqli_stmt_get_result($stmt);
						if ($result) {
							$rows = mysqli_num_rows($result);
							if ($rows>0) {
								$record = mysqli_fetch_assoc($result);
								// echo "Welcome".$record['name'];
								$passwordHashed = $record['password'];

								$passwordStatus = password_verify($password, $passwordHashed);

								if ($passwordStatus) {
									echo "<h6 style=color:green;>Log In successful</h6>";

									echo "Welcome dear,".$record['name'];
									$fullname = $record['name'];

									session_start();

									$_SESSION['name'] = $fullname;
									header('location:index.php');
									# code...
								}else{
									echo "<h6 style=color:red;>Invalid email or password</h6>";

								}
								
								# code...
							}else{
								echo "<h6 style=color:red;>Invalid email or password</h6>";
							}
							# code...
						}else{
							echo "Something is wrong with the results.";
						}


						# code...
					}else{
						echo "Something went wrong. Try Again";
					}
					# code...
				}


				?>
				<br>
				Don't have an account?
				<a style="text-decoration: none;" href="register.php">Sign Up</a>
			
					    
					  </div>
					</div>
				

				
				
			</div>
		<div style="background-color: #E3B891; margin-top:150px;padding: 15px " class="col-14">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
		</center>
	</div>
	</div>

</body>
</html>