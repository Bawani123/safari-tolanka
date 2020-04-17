<!DOCTYPE html>
<html>
<head>
	<title>My profile</title>
	


		<meta charset="utf-8">
		<meta name="viewport"
		content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,
		minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="css/bootstrap.css">


	<link rel="stylesheet" type="text/css" href="style8.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<style>
body
{
	background: linear-gradient(rgba(0, 0,50,0.5 ),rgba(0, 0, 50, 0.5)),url(img3/pro.jpg);
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
body{

	background-color: #b1bfe7;
	
}	
input{
	width: 30%;
	height: 8%;
	border: 3px;
	border-radius: 05px;
	padding: 8px 15px 8px 15px;
	margin: 10px 0px 15px 0px;
	box-shadow: 1px 1px 2px 1px green;
	font-size:80%;

}
h1{
	color: whitesmoke;
}
h3{
	color: yellow;
}

</style>

</head>
<body>




	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand">Safari To Lanka</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
       <button style="font-size:15px" class="btn btn-warning"><b><a class= "float-right" href="logout2.php"> LOG OUT </a></i></b></button> </center>
<br>
      </li><br><br>
       <li class="nav-item">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Notification <span class="badge badge-light">2</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HURRY UP!</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->


          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        * Register for a new travel before 31st of May and get a special offer.<br>
        * Get 10% offer for your new travel.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>
<br>
      </li>
    
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Special Offer!</strong> Get 10% off by using our services more than once.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

	<center>
		
		
<h1>
Search infomation about your previous tours</h1>
		<hr>

		<div class="card" style="width: 18rem;">
  <img src="img4/p1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    
  </div>
</div>


		<h2><form action="" method="POST">
			<input type="password" name="password" id="password" placeholder="password"/><br/><!--whitesmoke;-->

			<input type="submit" name="search" value="search">
		</form></h2>
	<?php
	$connection= mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'useraccountnew');

	if(isset($_POST['search']))
	{
		$password = $_POST['password'];

		$query = "SELECT * FROM traveldetails3 where password='$password' ";
		$query_run =mysqli_query($connection,$query);

		while ($row = mysqli_fetch_array($query_run))
		{
			?>
				<form action="" method="POST">
					<h2> Here Your Travel Infomation</h2>
					<br>
					<div class="spinner-grow  text-success" role="status">
			 		<span class="sr-only">Loading...</span>
					</div><br>
					<h3>1. First name:</h3>
					<input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"/>
					<h3>2. Last name:</h3>
					<input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"/>
					<h3>3. Email Address:</h3>
					<input type="text" name="email" value="<?php echo $row['email'] ?>"/>
					<h3>4. Contact Number:</h3>
					<input type="text" name="contactnumber" value="<?php echo $row['contactnumber'] ?>"/>
					<h3>5. Age:</h3>
					<input type="text" name="age" value="<?php echo $row['age'] ?>"/>
					<h3>6. Gender:</h3>
					<input type="text" name="gender" value="<?php echo $row['gender'] ?>"/>
					<h3>7. Country:</h3>
					<input type="text" name="country" value="<?php echo $row['country'] ?>"/>
					<h3>8. National Identity Card No:</h3>
					<input type="text" name="NIC" value="<?php echo $row['NIC'] ?>"/>
					<h3>9. Address:</h3>
					<input type="text" name="address" value="<?php echo $row['address'] ?>"/>
					<h3>10. Package that you used:</h3>
					<input type="text" name="package" value="<?php echo $row['package'] ?>"/>
					<h3>11. No of Members:</h3>
					<input type="text" name="members" value="<?php echo $row['members'] ?>"/>
					<h3>12. Your flight arrival no:</h3>
					<input type="text" name="flightnoarrival" value="<?php echo $row['flightnoarrival'] ?>"/>
					<h3>13. Your flight departure no:</h3>
					<input type="text" name="flightnodeparture" value="<?php echo $row['flightnodeparture'] ?>"/>

					<input type="hidden" name="password" value="<?php echo $row['password'] ?>"/>
					
					
				</form>


			<?php	
		}
	}
	?>	


	</center>



<div class="alert alert-primary" role="alert">
  <h4 class="alert-heading"></h4>
 <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-dark">About us</h4>
          <p class="text-muted">
          Safari to Lanka and Tours Service is pleased to provide you with our inclusive range of services to make your stay in Sri Lanka pleasant and comfortable. Through our new website, you will be able to be up to date about our advertising real-time promotions, announcing of new services, last minute tremendous offers and many more.</p>
        
          </p>
        </div>  <hr>
  <div class="col-sm-6">
          <img src="img1/lanka4.png" class="icon">

  </p>



</div>
</div>  


</body>
</html>
