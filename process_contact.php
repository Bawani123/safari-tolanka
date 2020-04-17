<?php
require_once('config_db.php');
?>

<?php

		if(isset($_POST)){
			$fullname 	= $_POST['fullname'];
			$email 		= $_POST['email'];
			$contactNo 	= $_POST['contactNo'];
			$counrty 	= $_POST['counrty'];
			$subject 	= $_POST['subject'];
			$textArea 	= $_POST['textArea'];

			$sql = ("INSERT INTO contact_us_tab(FULL_NAME,EMAIL,CONACT_NO,COUNTRY,SUBJECT_TITLE,MESSAGE) VALUES('$fullname','$email','$contactNo','$counrty','$subject','$textArea')");
			$stmtinsert = $db->prepare($sql); 


			$result= $stmtinsert->execute();
			if($result){
				echo 'Save succesful';

			}
			else {
				echo("Save Failed");
			}

		}
		else{
			echo 'No Data Available!';
		}


