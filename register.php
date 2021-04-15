<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
		<?php include('nav.php');
		// // session_start();
		// if (!isset($_SESSION['name'])) {
		// 	# code...
		// 	header('location:login.php');
		// }


		?>
		<div id="banner">
			<span class="head">Library Management System</span><br />
			<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">NEON DESIGNS</marquee>
		</div>
<br />
	</div>
	<div style="margin: 10px" class="col-10">
			<div class="alert alert-warning" role="alert">
	 			 <i><b><center style="font font-size: 15px;color: #EC7C13;">Welcome to my library
	 			 	<p>Sign Up</p>
	 			</center></b></i>
	 	</div>
	 </div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<img style="width: 500px;height: 400px;" src="https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="img-fluid"> 
				
			</div>

			<div class="col-4">

				<div style="border-radius: 30px;margin: 15px;background-color:#FACB9F;box-shadow: 10px 10px 8px 0 black" class="card">
					  <div class="card-body">
					  	<center>
					  	<form method="POST" action="">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Full name:</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" name="full_name" aria-describedby="emailHelp" required>					    
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email:</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>					    
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Contact:</label>
					    <input type="phone" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" required>					    
					  </div>

					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password:</label>
					    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
					    <div id="emailHelp" class="form-text" style="color:red">Never share your password with anyone else!</div>
					  </div>

					  

					  
					  <button style="background-color: #EC7C13" type="submit" name="register" class="btn">Sign Up</button>

				</form>
				<br>
				Already registered?
				<a style="text-decoration: none;" href="login.php">Login Now</a>
				<?php
				if (isset($_POST['register'])) {
					$fullname = $_POST['full_name'];
					$email = $_POST['email'];
					$contact = $_POST['contact'];
					$password = $_POST['password'];

					$hashedpassword=password_hash($password, PASSWORD_DEFAULT);
					# code...
					//connection
					require ('dbConnect.php');
					$sql = "INSERT INTO `students`( `name`, `password`, `email`, `contact`) VALUES (?,?,?,?)";
					//prepare
					if ($stmt = mysqli_prepare($conn,$sql)) {

						# code...
						//binding
						mysqli_stmt_bind_param($stmt,"ssss",$param_name,$param_pass,$param_email,$param_contact);
						$param_name = $fullname;
						$param_pass =  $hashedpassword;
						$param_email = $email;
						$param_contact = $contact;



						if (mysqli_stmt_execute($stmt)) {
							echo "<h5 style='color:green'>Registered successfully!</h5>";
							header('location:login.php');
							# code...
						}else{
							echo "<h5 style='color:brown;'>Ooops!!Failed to register.<a style='text-decoration:none;' href='register.php'>Try Again</a></h5>";
						}
					}else{
						echo "Something went wrong".mysqli_error($conn);
					}


				}


				?>
			</center>
					    
					  </div>
					</div>
				

				
			</div>
		</div>
		<div style="background-color: #E3B891; margin-top:150px;padding: 15px " class="col-14">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
		
	</div>

</body>
</html>

