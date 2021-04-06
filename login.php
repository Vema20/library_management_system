<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<?php include('nav.php')?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<img src="https://images.unsplash.com/photo-1525358180237-7399f908a1d9?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODR8fGxpYnJhcnklMjBpbnRlcmlvcnxlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid">
				
			</div>

			<div class="col-6">
				<form method="POST" action="">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Username</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" required>					    
					  </div>

					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
					    <div id="emailHelp" class="form-text" style="color: #E85534 ">Never share your password with anyone else!</div>
					  </div>

					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>					    
					  </div>

					  
					  <button type="submit" name="login" class="btn btn-primary">Log in</button>
				</form>

				<?php 

				require_once('dbConnect.php');

				if (isset($_POST['login'])) {

					$name = $_POST['username'];
					$pass = $_POST['password'];
					$email = $_POST['email'];

				$sql = "INSERT INTO students(name,password,email)VALUES(?,?,?)";
			           //prepare query
					if ($stmt = mysqli_prepare($conn,$sql)) {
						//echo "Successful query";
						# code...
						mysqli_stmt_bind_param($stmt,"sss",$param_name,$param_password,$param_mail);
						//binding

						$param_name = $name;
						$param_password = $pass;
						$param_mail = $email;

						
						//execute stmt
						if (mysqli_stmt_execute($stmt)) {
							echo "<h4 style='color:green'>Log in successful</h4>";
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
		<div style="background-color: #FBB87A  ; margin:20px;padding: 15px " class="col-14">
				<div  class="card-footer bg-transparent border-success">designed by:
					<p> &copy; Vema Oluoch Web Designs</p>
					<p>Email Address:oluochadhvema@gmail.com</p>

				</div>
			</div>
		
	</div>

</body>
</html>