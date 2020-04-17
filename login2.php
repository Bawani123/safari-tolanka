<!DOCTYPE html>
<html>
<head>
	<title>User Login & Registration</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style9.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login Here</h2>
				<form action="validation2.php" method="post">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="firstname" class="form-control" required>
						
					</div>


					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
						
					</div>

					<button type="submit" class="btn btn-success">LOGIN</button>

					
						
					
					
				</form>
				
			</div>

			<div class="col-md-6 login-right">
				<h2>Register Here</h2>
				<form action="registration0.php" method="post">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="firstname" class="form-control" required>
						
					</div>


					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lastname" class="form-control" required>
						
					</div>

					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="email" type="email" class="form-control" required>
						
					</div>

					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phonenumber" class="form-control" required>
						
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
						
					</div>




					<button type="submit" class="btn btn-primary">REGISTER</button>

					
						
					
					
				</form>
				
			</div>
			
			
		</div>
		</div>
		
	</div>

</body>
</html>