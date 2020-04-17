<?php
$conn = mysqli_connect('localhost','root','','useraccountnew');
$query="SELECT * FROM traveldetails3";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
	echo "".$row["firstname"]." ".$row["lastname"]."- ".$row["email"]." -".$row["package"]."<br> ";
	# code...
}
?>