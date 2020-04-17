<?php
require_once('config2.php');
?>
<?php

if(isset($_POST)){

	$firstname 			= $_POST['firstname'];
	$lastname 			= $_POST['lastname'];
	$email 				= $_POST['email'];
	$contactnumber		= $_POST['contactnumber'];
	$age				= $_POST['age'];
	$gender				= $_POST['gender'];
	$NIC				= $_POST['NIC'];
	$address        	= $_POST['address'];
	$service       		= $_POST['service'];
	$company        	= $_POST['company'];
	$caddress			= $_POST['caddress'];
	$skills				= $_POST['skills'];
	$experience			= $_POST['experience'];
	$password 			= ($_POST['password']);

		$sql = "INSERT INTO joinInformation(firstname, lastname, email, contactnumber, age, gender, NIC, address, service,
		company, caddress, skills, experience, password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $contactnumber, $age, $gender, $NIC, $address, $service, $company, $caddress, $skills, $experience, $password]);                    
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}