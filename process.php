<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 			= $_POST['firstname'];
	$lastname 			= $_POST['lastname'];
	$email 				= $_POST['email'];
	$contactnumber		= $_POST['contactnumber'];
	$age				= $_POST['age'];
	$gender				= $_POST['gender'];
	$country			= $_POST['country'];
	$NIC				= $_POST['NIC'];
	$address        	= $_POST['address'];
	$package       		= $_POST['package'];
	$members        	= $_POST['members'];
	$flightnoarrival	= $_POST['flightnoarrival'];
	$flightnodeparture	= $_POST['flightnodeparture'];
	$password 			= ($_POST['password']);

		$sql = "INSERT INTO traveldetails3(firstname, lastname, email, contactnumber, age, gender, country, NIC, address, package, members, flightnoarrival, flightnodeparture, password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $contactnumber, $age, $gender, $country, $NIC, $address, $package, $members, $flightnoarrival, $flightnodeparture, $password]);                    
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}