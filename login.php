<!DOCTYPE html>
<html>
<head>
	<title>User Login & Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<style>
		body{
	background: linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5)),url(img3/m1.jpg);
	background-size: cover;
	background-position: center;
}

.login-box
{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}

.login-left
{
	background: rgba(211,211,211,0.5);
	padding: 30px;
}

.login-right
{
	background: #fff;
	padding: 30px;
}

.form-control
{
	background-color: transparent !important;
}

a
{
	color: #fff !important;
}

h1
{
	color: #fff !important;
	margin-top: 200px !important;
	text-align: center;
	text-transform: uppercase;
}

button
{
    text-transform: uppercase;
}
	</style>

	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login Here</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="firstname" class="form-control" required>
						
					</div>


					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
						
					</div>

					<button type="submit" class="btn btn-warning">LOGIN</button>

					
						
					
					
				</form>
				
			</div>

			<div class="col-md-6 login-right">
				<h2>Register Here</h2>
				<form action="registration.php" method="post">
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