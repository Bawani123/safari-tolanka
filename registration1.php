<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>

	<title>User Registration | PHP</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<style>
body
{
	background: linear-gradient(rgba(0, 0,50,0.5 ),rgba(0, 0, 50, 0.5)),url(img3/t12.jpg);
    background-size: cover;
    background-position: center;
}

.login-box{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}
.login-right
{
	background: rgba(211,211,211,0.5);
	padding: 30px;
}
	footer {
    width: 85%;
    background-color: #23415C;
    padding: 5% 5% 10% 5%;
    color: #FFF;
  }
  .fa {
    padding: 15px;
    font-size: 25px;
    color: #FFF;
  }
  .fa:hover {
    color: #D5D5D5;
    text-decoration: none;
  }
  .icon {
    max-width: 200px;
  }

  @media (max-width: 768px) {
    .landing-text h1 {
      font-size: 300%;
    }
    .fa {
      font-size: 10px;
      padding: 10px;

    }
    .icon {
      padding-top: 5%;
      max-width: 100px;
    }

  }
		
	</style>

<div>
	<?php
	
	?>	
</div>
<nav class="navbar navbar-expand-sm navbar-light bg-primary">
  <a class="navbar-brand">Safari To Lanka</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       
     
      	<button style="font-size:17px" class="btn btn-warning"><b> <a class= "float-right" href="logout.php">LOG OUT</a></i></b></button>
		&nbsp;

      	 <button style="font-size:17px" class="btn btn-warning"><b> <a class= "float-right" href="myprofile.php">My Profile</a></i></b></button>
       
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			<div class="login-box">
			
			<div class="row">
			<div class="col-md-6 login-right">
					<h1>Travel Registration Form</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-12">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="contactnumber"><b>Contact Number</b></label>
					<input class="form-control" id="contactnumber"  type="text" name="contactnumber" required>

					<label for="age"><b>Age</b></label>
					<input class="form-control" id="age"  type="text" name="age" required>

					<label for="gender"><b>gender</b></label>
					<input class="form-control" id="gender"  type="text" name="gender" required>

					<label for="country"><b>Country</b></label>
					<input class="form-control" id="country"  type="text" name="country" required>

						</div>
					<hr class="mb-3">
					<div class="col-md-6 login-right">
					
					<br><br><br><br><br><br><br>   <hr class="mb-12">

					<label for="NIC"><b>National Identity card no</b></label>
					<input class="form-control" id="NIC"  type="text" name="NIC" required>

					<label for="address"><b>Address</b></label>
					<input class="form-control" id="address"  type="text" name="address" required>

					<label for="package"><b>Package</b></label>
					<input class="form-control" id="package"  type="text" name="package" required>

					<label for="members"><b>No of Travel members(if a group)</b></label>
					<input class="form-control" id="members"  type="text" name="members" required>

					<label for="flightnoarrival"><b>flight arrival No</b></label>
					<input class="form-control" id="flightnoarrival"  type="text" name="flightnoarrival" required>

					<label for="flightnodeparture"><b>flight departure No</b></label>
					<input class="form-control" id="flightnodeparture"  type="text" name="flightnodeparture" required>

                    <label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<br>

				  <select class="custom-select">
  				  <option selected>Package</option>
 				  <option value="1">Wild Life & jeep Tour</option>
 				  <option value="2">Discover Sri Lanka Tour</option>
  				  <option value="3">Culture & Heritage Tour</option>
  				  <option value="4">Sri Lanka beauty & nature Tour</option>
  				  <option value="5">Adventure Tour</option>
				 </select>

				 	<br><br>

					<div class="custom-control custom-checkbox">
  					<input type="checkbox" class="custom-control-input" id="customCheck1">
  					
  					<label class="custom-control-label" for="customCheck1">Agree to terms & regulations</label>
					</div>
					

					
					<hr class="mb-3">
					<input class="btn btn-danger" type="submit" id="register" name="create" value="SUBMIT">
				

                </div>
					
					

					
				
			</div>
		</div>

	</form>
	<footer class="container-fluid text-center">
			<div class="row">
				<div class="col-sm-4">
					<h3>Contact us<h3>
						<br>
						<h4>Safari To Lanka</h4>
						<h4>A Leading company for tuarism Sri Lanka</h4>
						<h4>Colombo 7</h4>
						<h4>+94 0112970285</h4>
						<h4>safaritolanka@gmail.com</h4>


				</div>


				<div class="col-sm-4">
					<h3>Connect</h3>
					<a href="#" class="fa fa-facebook"></a>

					<a href="#" class="fa fa-twitter"></a>

					<a href="#" class="fa fa-google"></a>

					<a href="#" class="fa fa-linkedin"></a>

					<a href="#" class="fa fa-youtube"></a>



				</div>


				<div class="col-sm-4">
					<img src="img1/lanka4.png" class="icon">

				</div>


			</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 			= $('#firstname').val();
			var lastname			= $('#lastname').val();
			var email 				= $('#email').val();
			var contactnumber 		= $('#contactnumber').val();
			var age 				= $('#age').val();
			var gender 				= $('#gender').val();
			var country     		= $('#country').val();
			var NIC     			= $('#NIC').val();
			var address    			= $('#address').val();
			var package     		= $('#package').val();
			var members     		= $('#members').val();
			var flightnoarrival 	= $('#flightnoarrival').val();
			var flightnodeparture 	= $('#flightnodeparture').val();
			var password 			= $('#password').val();

			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,contactnumber: contactnumber,age: age,gender: gender,country: country,NIC: NIC,address: address,package: package,members: members,flightnoarrival: flightnoarrival,flightnodeparture: flightnodeparture,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': 'successfully saved your details.We will contact you immediately!',
								'type': 'successfully saved your details.We will contact you immediately!'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>