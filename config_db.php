<?php


$db_user = "root";
$db_pass = "";
$db_name ="useraccountnew";



 try {
    $db = new PDO("mysql:host=$localhost;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection ok!";


    } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>

